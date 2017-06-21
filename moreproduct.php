<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet"></link>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Convict Records Product Website</title>
    <style>
        h1 {
            font-family: 'Raleway', sans-serif;
            font-size: 30px;
            text-align: center;
            letter-spacing: 1px;
            color: #faf5f5;
        }
        
        .sections a {
            font-size: 18px;
            font-family: 'Raleway', sans-serif;
            color: #faf5f5;
        }
        
        input {
            margin: 8px 0 8px 0;
            color: #000;
        }
        
        button {
            font-family: 'Raleway', sans-serif;
            text-transform: uppercase;
            font-weight: bolder;
        }
    </style>
</head>

<body style="background-color: #794a5e;">
    <nav class="navbar navbar-default" style="position:fixed;">

        <div class="navbar-collapse collapse" id="menu">
            <a href="planding.php" class="logo">Moreton Bay Convict Records</a>
            <ul class="nav navbar-nav">
                <li id="even">
                    <a href="planding.php">HOME</a>
                </li>
                <li id="even">
                    <a href="moreproduct.php">products</a>
                </li>
                <li id="even">
                    <a href="statspage.php">stats</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/qldstatearchives"><img src="img/facebook-with-circle.png" alt="Facebook Logo"></a>
                </li>
                <li>
                    <a href="https://twitter.com/qsarchives"><img src="img/twitter-with-circle.png" alt="Twitter Logo"></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/qsarchives/"><img src="img/instagram-with-circle.png" alt="Instagram Logo"></a>
                </li>
            </ul>
        </div>




    </nav>

    <div id="moreproducts" class="sections">
        <form method="post">
            <h1 style="padding-bottom: 10px;">Sign up for more information</h1>
            <p>We'll alert you to any new products, features, and more. Stay tuned!</p>
            <p>Name: <input name="uname"></input>
            </p>
            <p>Email: <input name="uemail"></input>
            </p>
            <button name="mysubmit" type="submit">Register now</button>
        </form>
    </div>
</body>

</html>

<?php 
if(isset($_POST["mysubmit"])){
	
$servername="localhost";
$username="admin";
$password="admin";
$dbname = "tinasDB";

$conn = new mysqli($servername, $username, $password, $dbname);

$uname = $_POST["uname"];
$uemail = $_POST["uemail"];



$sql = "INSERT INTO `productinterest` (`id`, `name`, `email`, `date`) VALUES (NULL, '".$uname."', '".$uemail."', CURRENT_TIMESTAMP)";
$conn->query($sql);


	
}
?>