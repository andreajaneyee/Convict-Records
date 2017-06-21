<!DOCTYPE HTML> 
<html lang="en"> 
<head> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
	<script src="js/contactus.js"></script>
    <meta content="no-cache" http-equiv="CACHE-CONTROL">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Convict Records</title> 
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <link href="css/indexformobile.css" rel="stylesheet">
    <script src="js/bootstrap.min.js">
    </script>
    <style>
        body {
            background: url(img/backgrounds/admin-background.png)
            no-repeat center fixed; background-size: cover; 
        }
        
        form {
            padding: 0;
        }
        
        #submitbutton {
            width: 80%;
        }
        
        button {
            margin: 0 10%;
        }
        
        select {
            display: inherit;
            margin: 0 auto;
        }
        
        input[type=checkbox] {
            width: 3%;
            height: 20px;
            margin-left: 2%;
        }
    </style>
</head> 
<body>
    <header>
		<a href="index.html"><h3 id="nav-logo">Queensland State Archives</h3></a>
	</header>
    <!--NAVIGATION BAR-->
	<nav>
		<ul class="showing">
			<a href="index.html"><li>HOME</li></a>
			<a href="analytics.html"><li>ANALYTICS</li></a>
			<a href="search.html"><li>SEARCH</li></a>
			<a href="gallery.html"><li>GALLERY</li></a>
			<a href="contactus.html"><li>CONTACT US</li></a>
			<a href="adminLogin.html"><li>ADMIN LOGIN</li></a>
		</ul>
		<div class="handle">  </div>
	</nav>
    <!--START OF PAGE CONTENTS--> 
	<form method="post">
	<div class="contents" id="admin_function">
		<div class="container">
			<div id="enquiryform">
			<h1>Add an entry to list of all convicts </h1>
			<form name="AddEntryForm">
				<p>Born in (city):<br> <input name="ucity"></input></p><br>
				<p>Name:<br> <input name="uname"></input></p><br>
				<p>Age:<br> <input name="uage"></input></p><br>
				<p>Height (Ft):<br> <input name="uhtf"></input></p><br>
				<p>Height (Inches - whole):<br> <input name="uhti"></input></p><br>
				<p>Height (Inches - fraction - e.g. 1/2):<br> <input name="uhts"></input></p><br>
				<p>Complexion:<br> <input name="ucomp"></input></p><br>
				<p>Hair:<br> <input name="uhair"></input></p><br>
				<p>Eyes:<br> <input name="ueye"></input></p><br>
				<p>Religion:<br> <input name="urel"></input></p><br>

				<button id="submitbutton" name="mysubmit" type="submit">Add entry</button>
			</form>
			</div>
		</div>
	
		<div class="container">
			<div id="enquiryform">
			<h1> Delete an entry to list of all convicts </h1>
			<form name="DeleteEntryForm">
				<p>Name of convict to delete from table containing fields above:<br> <input name="deletename"></input></p>

				<button id="submitbutton" name="submittwo" type="submit">Delete entry</button>
			</form>
			</div>
		</div>
		
		<div class="container">
			<div id="enquiryform">
			<h1> Add an entry to list of all convict information </h1>
			<form name="AddEntryConvictListForm">
				<p>Name:<br> <input name="u1"></input><br>
				Ship:<br> <input name="u2"></input><br>
				Original conviction place:<br> <input name="u3"></input><br>
				Original conviction date (day and month):<br> <input name="u4"></input><br>
				Original conviction date (year):<br> <input name="u5"></input><br>
				Original conviction offence:<br> <input name="u6"></input><br>
				Original conviction sentence:<br> <input name="u7"></input><br>
				Trade:<br> <input name="u8"></input><br>
				Colonial conviction by whom:<br> <input name="u9"></input><br>
				Colonial conviction where:<br> <input name="u10"></input><br>
				Colonial conviction date (day and month):<br> <input name="u11"></input><br>
				Colonial conviction date (year):<br> <input name="u12"></input><br>
				Colonial conviction offence:<br> <input name="u13"></input><br>
				Colonial conviction sentence:<br> <input name="u14"></input><br>
				Remarks 1:<br> <input name="u15"></input><br>
				Remarks 2:<br> <input name="u16"></input><br>
				Remarks 3:<br> <input name="u17"></input><br>
				Remarks 4:<br> <input name="u18"></input><br>
				Remarks 5:<br> <input name="u19"></input><br>
				Annotations:<br> <input name="u20"></input><br></p>

				<button id="submitbutton" name="submitthree" type="submit">Add entry</button>
			</form>
			</div>
		</div>
	
		<div class="container">
			<div id="enquiryform">
				<h1> Delete an entry to conviction record </h1>
				<p> Name of convict to delete from table containing fields above: <input name="deletename2"></input></p>
				<p> If you need to be more specific, then tick this box and fill in bit below <input name="mycheck" type="checkbox"></input></p>
				<form name="DeleteEntryForm">
					<select name="dropdown">
					<option value="ship">ship</option>
					<option value="originalconvictionplace">originalconvictionplace</option>
					<option value="originalconvictiondateDayMonth">originalconvictiondateDayMonth</option>
					<option value="originalconvictiondateYear">originalconvictiondateYear</option>
					<option value="originalconvictionoffence">originalconvictionoffence</option>
					<option value="originalconvictionsentence">originalconvictionsentence</option>
					<option value="trade">trade</option>
					<option value="colonialconvictionbywhom">colonialconvictionbywhom</option>
					<option value="colonialconvictionwhere">colonialconvictionwhere</option>
					<option value="colonialconvictionDayMonth">colonialconvictionDayMonth</option>
					<option value="colonialconvictionYear">colonialconvictionYear</option>
					<option value="colonialconvictionOffence">colonialconvictionOffence</option>
					<option value="colonialconvictionSentence">colonialconvictionSentence</option>
					<option value="remarks1">remarks1</option>
					<option value="remarks2">remarks2</option>
					<option value="remarks3">remarks3</option>
					<option value="remarks4">remarks4</option>
					<option value="remarks5">remarks5</option>
					<option value="annotations">annotations</option>
					</select>
				
	<p><input name="dropdowntext"></input></p>
	<!--
	`originalconvictionplace`, `originalconvictiondateDayMonth`, 
	`originalconvictiondateYear`, `originalconvictionoffence`, `originalconvictionsentence`, `trade`, `colonialconvictionbywhom`, 
	`colonialconvictionwhere`, `colonialconvictionDayMonth`, `colonialconvictionYear`, `colonialconvictionOffence`, `colonialconvictionSentence`, 
	`remarks1`, `remarks2`, `remarks3`, `remarks4`, `remarks5`, `annotations`
	<p> Original conviction date (day and month):  <input name="deleteday2"></input></p>
	<p>Original conviction date (year): <input name="deleteyear2"></input></p>
	-->

	<button id="submitbutton" name="submitfour" type="submit">Delete entry</button>
	</div>
	</form>
</body>
</html>

<?php

if(isset($_POST["mysubmit"])){
	
	$servername="localhost";
$username="root";
$password="";
$dbname = "tinasDB";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO `archiveskendescription` (`id`, `nativeplace`, `name`, `age`, `HeightFt`, `HeightInchBig`, `HeightInchSmall`, `Complexion`, `Hair`, `Eyes`, `Religion`) 
VALUES (NULL, '".$_POST["ucity"]."', '".$_POST["uname"]."', '".$_POST["uage"]."', '".$_POST["uhtf"]."', '".$_POST["uhti"]."', '".$_POST["uhts"]."', 
'".$_POST["ucomp"]."', '".$_POST["uhair"]."', '".$_POST["ueye"]."', '".$_POST["urel"]."')";
$conn->query($sql)  or die("update failed");

	
	
}

if(isset($_POST["submittwo"])){
	
	$servername="localhost";
$username="root";
$password="";
$dbname = "tinasDB";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "DELETE FROM `archiveskendescription` WHERE name = '".$_POST["deletename"]."'";
$conn->query($sql)  or die("update failed");
	
}


if(isset($_POST["submitthree"])){
	
	$servername="localhost";
$username="root";
$password="";
$dbname = "tinasDB";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO `archiveskenchronological` (`id`, `name`, `ship`, `originalconvictionplace`, `originalconvictiondateDayMonth`, 
`originalconvictiondateYear`, `originalconvictionoffence`, `originalconvictionsentence`, `trade`, `colonialconvictionbywhom`, 
`colonialconvictionwhere`, `colonialconvictionDayMonth`, `colonialconvictionYear`, `colonialconvictionOffence`, `colonialconvictionSentence`, 
`remarks1`, `remarks2`, `remarks3`, `remarks4`, `remarks5`, `annotations`) VALUES (NULL, 
'".$_POST["u1"]."', '".$_POST["u2"]."', '".$_POST["u3"]."', '".$_POST["u4"]."', '".$_POST["u5"]."', '".$_POST["u6"]."', '".$_POST["u7"]."', 
'".$_POST["u8"]."', '".$_POST["u9"]."', '".$_POST["u10"]."', '".$_POST["u11"]."', '".$_POST["u12"]."', '".$_POST["u13"]."', '".$_POST["u14"]."', 
'".$_POST["u15"]."', '".$_POST["u16"]."', '".$_POST["u17"]."', '".$_POST["u18"]."', '".$_POST["u19"]."', '".$_POST["u20"]."')";
$conn->query($sql)  or die("update failed");
	
/*	
	if ($conn->query($sql) === TRUE) {
    echo "<p>Table 1 created successfully</p>";
} else {
    echo "Error creating table: " . $conn->error;
}
*/
}

if(isset($_POST["submitfour"])){
	
	$servername="localhost";
$username="root";
$password="";
$dbname = "tinasDB";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "DELETE FROM `archiveskenchronological` WHERE name = '".$_POST["deletename2"]."'";

if(isset($_POST["mycheck"])){
	/*
$sql = $sql."' AND originalconvictiondateDayMonth = '".$_POST["deleteday2"]."' 
AND originalconvictiondateYear = '".$_POST["deleteyear2"]."'";
*/
$sql = $sql . " AND ".$_POST["dropdown"] . " = '".$_POST["dropdowntext"]."'";

}


$conn->query($sql)  or die("update failed");

/*
	if ($conn->query($sql) === TRUE) {
    echo "<p>Table 1 created successfully</p>";
} else {
    echo "Error creating table: " . $conn->error;
}
	*/
}

?>