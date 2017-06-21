<?php

/*
$mystring = '{"cols":[{"label":"Year","type":"string"},{"label":"Sales","type":"number"},{"label":"Expenses","type":"number"}],
"rows":[{"c":[{"v":"2004"},{"v":1000},{"v":400}]}

,{"c":[{"v":"2005"},{"v":1170},{"v":460}]},{"c":[{"v":"2006"},{"v":660},{"v":1120}]},
{"c":[{"v":"2007"},{"v":1030},{"v":540}]}]

}';
echo $mystring;

*/

//$myanswer = '{"cols":[{"label":"Convicts","type":"string"},{"label":"Sales","type":"number"},{"label":"Expenses","type":"number"}],';

$myinput = $_GET["name"];

$myvar = $myinput;
if($myvar == "Age"){
	$myvar = "age";
}
if($myvar == "Born"){
	$myinput = "Place of birth";
	$myvar = "nativeplace";
}



$servername="localhost";
$username="root";
$password="";
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

$mylabels = array();
$mycounts = array();


$sql = "SELECT COUNT(*),".$myvar." FROM ArchivesKenDescription GROUP BY ".$myvar." HAVING COUNT(*) > 10 ORDER BY ".$myvar;
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		$newlabel = $row[$myvar];
		
		if($newlabel != ""){
		
		array_push($mylabels, $newlabel);
		array_push($mycounts, $row["COUNT(*)"]);
		}
		
    }
}

$firststring = '{"cols":[{"label":"'.$myinput.'","type":"string"},{"label":"Number of convicts","type":"number"}],"rows":['; //{"label":"Convicts","type":"string"},{"label":"Sales","type":"number"},{"label":"Expenses","type":"number"}],';

$mycounter = 0;
foreach($mylabels as $lab){
	$count = $mycounts[$mycounter];
	
	$firststring = $firststring . '{"c":[{"v":"'.$lab.'"},{"v":'.$count.'}]},';
	
	$mycounter++;
}


$firststring = substr_replace($firststring, '', -1);  
$firststring = $firststring . ']}';

echo $firststring;


?>