<?php

$myanswer = '{"cols":[{"label":"OpeningMove","type":"string"},{"label":"Convicts","type":"number"}],"rows":[';

$value = "Tinas value";
$number = 4;


$servername="localhost";
$username="admin";
$password="admin";
$dbname = "tinasDB";

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT DATE_FORMAT(`date`,  '%c %d %Y') AS mydate, COUNT(*) FROM `productinterest` GROUP BY mydate";
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		//var_dump($row);
		//echo "Ship: ".$row["ship"].", Count: ".$row["COUNT(*)"]."<br>";
		//$txt = $row["remarks1"].",".$row["COUNT(*)"]."\n";
		
		$value = $row["mydate"];
		$number = $row["COUNT(*)"];
   
 

  
  $myanswer = $myanswer . '{"c":[{"v":"'.$value.'"},{"v":'.$number.'}]},';
  //here

     }
}
$myanswer = substr_replace($myanswer, "", -1);  




$myanswer = $myanswer . ']}';

echo $myanswer;


?>