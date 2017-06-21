<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname = "tinasDB";
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$comp = $_GET["mycomplexion"];
	$complexionsearch = " Complexion LIKE '%".$comp ."%' ";
	$eyesearch = " AND Eyes LIKE '%" . $_GET["myeyes"] . "%' ";
	$hairsearch = " AND Hair LIKE '%". $_GET["myhair"] . "%' ";
	$namesearch = " AND name LIKE '%" . $_GET["myfirstname"] . " " . $_GET["myfamilyname"] . "%' ";
	$thisheight = $_GET["myheights"];
	$heightsearch = "";
	
	if($thisheight != ""){
		$heightsearch = " AND HeightFt ". $thisheight;
	}

	$peopledetails = "SELECT * FROM ArchivesKenDescription WHERE " . $complexionsearch . $eyesearch . $hairsearch. $heightsearch .$namesearch ;
	//$peopledetails = "SELECT * FROM ArchivesKenDescription";
	$result = $conn->query($peopledetails);
	
	if ($result->num_rows > 0) {
        //Results styling
		echo "<table style='width:100%'> 
	<tr>
    <th>Name</th>
    <th>Born</th> 
    <th>Age</th>
	<th>Height</th>
	<th>Complexion</th>
	<th>Hair</th>
	<th>Eyes</th>
	<th>Religion</th>
  </tr>";
		while($row = $result->fetch_assoc()) {
			//echo "Name: " . $row["name"]."<br>";
			$teststring_broken = utf8_decode($row["HeightInchSmall"]);
			//$teststring_converted = iconv("UTF-8", "UTF-8//IGNORE", $teststring_broken );
			$teststring_converted = $teststring_broken;
			echo "<tr> 
		<td>".$row["name"]."</td>
		<td>".$row["nativeplace"]."</td>
		<td>".$row["age"]."</td>
		<td>".$row["HeightFt"]." Ft ".$row["HeightInchBig"].$teststring_converted."</td>
		<td>".$row["Complexion"]."</td>
		<td>".$row["Hair"]."</td>
		<td>".$row["Eyes"]."</td>
		<td>".$row["Religion"]."</td>
		</tr>";
		}

		echo "</table>";
	} else {
		echo "0 results";
	}

	?>