	<?php
	$servername="localhost";
$username="admin";
$password="admin";
$dbname = "tinasDB";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$myname = $_GET["name"];
$namesearch = "name LIKE '%" . $_GET["myname"] . "%' ";
$shipsearch = " AND ship LIKE '%" . $_GET["myship"] . "%' ";
$ocp = " AND originalconvictionplace LIKE '%" . $_GET["ocp"] . "%' ";
$odm = " AND originalconvictiondateDayMonth LIKE '%" . $_GET["odm"] . "%' ";
$ody = " AND originalconvictiondateYear LIKE '%" . $_GET["ody"] . "%' ";
$oco = " AND originalconvictionoffence LIKE '%" . $_GET["oco"] . "%' ";
$ocs = " AND originalconvictionsentence LIKE '%" . $_GET["ocs"] . "%' ";
$trade = " AND trade LIKE '%" . $_GET["trade"] . "%' ";
$ccbw = " AND colonialconvictionbywhom LIKE '%" . $_GET["ccbw"] . "%' ";
$ccw = " AND colonialconvictionwhere LIKE '%" . $_GET["ccw"] . "%' ";
$ccdm = " AND colonialconvictionDayMonth LIKE '%" . $_GET["ccdm"] . "%' ";
$ccy = " AND colonialconvictionYear LIKE '%" . $_GET["ccy"] . "%' ";
$cco = " AND colonialconvictionOffence LIKE '%" . $_GET["cco"] . "%' ";
$ccs = " AND colonialconvictionSentence LIKE '%" . $_GET["ccs"] . "%' ";
$r1 = " AND remarks1 LIKE '%" . $_GET["r1"] . "%' ";
$r2 = " AND remarks1 LIKE '%" . $_GET["r2"] . "%' ";
$r3 = " AND remarks1 LIKE '%" . $_GET["r3"] . "%' ";
$r4 = " AND remarks1 LIKE '%" . $_GET["r4"] . "%' ";
$r5 = " AND remarks1 LIKE '%" . $_GET["r5"] . "%' ";
$a = " AND annotations LIKE '%" . $_GET["a"] . "%' ";

	

$peopledetails = "SELECT * FROM ArchivesKenChronological WHERE " . $namesearch . $shipsearch . $ocp . $odm . $ody . $oco . $ocs . $trade . $ccbw . $ccw . $ccdm .  $ccy . $cco . $ccs . $r1 . $r2 . $r3 . $r4 . $r5 . $a;


//$peopledetails = "SELECT * FROM ArchivesKenDescription";

$result = $conn->query($peopledetails);

if ($result->num_rows > 0) {
	echo "<table> 
	<tr>
    <th>Name</th>
    <th>Ship</th> 
    <th>Original conviction place</th>
	<th>Original conviction date - day and month</th>
	<th>Original conviction date - year</th>
	<th>Original conviction offence</th>
	<th>Original conviction sentence</th>
	<th>Trade</th>
	<th>Colonial conviction by whom</th>
	<th>Colonial conviction where</th>
	<th>Colonial conviction - day and month</th>
	<th>Colonial conviction - year </th>
	<th>Colonial conviction offence</th>
	<th>Colonial conviction sentence</th>
	<th>Remarks 1</th>
	<th>Remarks 2</th>
	<th>Remarks 3</th>
	<th>Remarks 4</th>
	<th>Remarks 5</th>
	<th>Annotations</th>
  </tr>";
    while($row = $result->fetch_assoc()) {
        //echo "Name: " . $row["name"]."<br>";
		//$teststring_broken = utf8_decode($row["HeightInchSmall"]); 

//$teststring_converted = iconv("UTF-8", "UTF-8//IGNORE", $teststring_broken );
//$teststring_converted = $teststring_broken;
		echo "<tr> 
		<td>".$row["name"]."</td>
		<td>".$row["ship"]."</td>
		<td>".$row["originalconvictionplace"]."</td>
		<td>".$row["originalconvictiondateDayMonth"]."</td>
		<td>".$row["originalconvictiondateYear"]."</td>
		<td>".$row["originalconvictionoffence"]."</td>
		<td>".$row["originalconvictionsentence"]."</td>
		<td>".$row["trade"]."</td>
		<td>".$row["colonialconvictionbywhom"]."</td>
		<td>".$row["colonialconvictionwhere"]."</td>
		<td>".$row["colonialconvictionDayMonth"]."</td>
		<td>".$row["colonialconvictionYear"]."</td>
		<td>".$row["colonialconvictionOffence"]."</td>
		<td>".$row["colonialconvictionSentence"]."</td>
		<td>".$row["remarks1"]."</td>
		<td>".$row["remarks2"]."</td>
		<td>".$row["remarks3"]."</td>
		<td>".$row["remarks4"]."</td>
		<td>".$row["remarks5"]."</td>
		<td>".$row["annotations"]."</td>
		</tr>";
    }
	echo "</table>";
} else {
    echo "0 results";
}
				?>