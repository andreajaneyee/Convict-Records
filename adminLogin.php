<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
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
</head>
<body style="background: url(img/backgrounds/admin-background.png) no-repeat center fixed; background-size: cover;">
    <header>
		<a href="http://www.archives.qld.gov.au/Pages/default.aspx"><h3 id="nav-logo">Queensland State Archives</h3></a>
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
    <div class="contents" id="admin-page">
        <div class="container"> 
            <div id="enquiryform">
            <h1>Administrator Login</h1>
            <p>This function is only accessible by authorised Queensland State Archives personnel.</p>
            <form name="MessageForm" action="welcome.php" method="post">
                Username:<br><input type="text" name="username" onfocus="selectedElement('username');" onblur="deselectedElement('username');"><br>
                Password:<br><input type="password" name="password" onfocus="selectedElement('password');" onblur="deselectedElement('password');"><br>
                <input name="submitbutton" id="submitbutton" type="submit" value="Login"></input>
            </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div id="socialmedia">
            <h4>Connect with us!</h4>
            <ul>
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
        <div class="qsa_details">
            <div id="contactno">
                <h4>Contact Us</h4>
                <p>Telephone: (07) 3131 7777<br> Facsimile: (07) 3131 7764<br> Email: <a href="mailto:info@archives.qld.gov.au">info@archives.qld.gov.au</a><br></p>
            </div>
            <div id="streetadd">
                <h4>Street address</h4>
                <p>435 Compton Road<br> Runcorn
                    <br> Queensland 4113</p>
            </div>
            <div id="postaladd">
                <h4>Postal address</h4>
                <p>PO Box 1397<br> Sunnybank Hills<br> Queensland 4109</p>
            </div>
        </div>
        <div id="copyright">
            <p><a href="http://www.archives.qld.gov.au/About/Pages/Copyright.aspx">
            &#169; The State of Queensland - Queensland State Archives 2016</a><br>Website was made by Team Orange</p>
        </div>
    </div>
</html>
