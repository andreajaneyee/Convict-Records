<?php

	$myu = $_POST["username"];
	$myp = $_POST["password"];
	if($myu == "admin" && $myp == "admin"){
		header('Location: adminadddelete.php');   
	}
	else{
		header('Location: index.html');   
	}
	


?>