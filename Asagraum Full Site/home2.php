<?php
session_start();
?>

<!doctype html>
<html lang="en">                                                                                    <!--define language (english)-->
<head>
	<meta charset="utf-8">                                                                          <!--define character set-->
    <title>Asagraum - Unofficial Website</title>                                                       <!--set title of the site, displayed on the browser tab-->
    <link rel="icon" href="pictures/icon.png">                                                       <!-- import custom icon :) --> <!--by me-->
    <meta name="description" content="Asagraum - Unofficial Website">                                  <!--set desciption-->
    <meta name="viewport" content="width=device-width, initial-scale=1">                            <!--define HTML5 viewport to change the website's size with the size of the window-->                                          
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
    <script src ="scripts/script.js"></script>      
</head>

<body>
<!--Note: this is the exact same page as the other home.php, though this is the one users will be directed to after clicking on the navbar, 
as this version doesn't send any queries about the user's login information. This is because home.php automatically redirects the user to log in again, as it doesnt detect a login.-->

<ul id=navbar> <!--structure navbar-->
    <li ><a href="home2.php">HOME</a></li>
    <li ><a href="info.php">INFO</a></li>
    <li ><a href="discography.php">DISCOGRAPHY</a></li>
    <li ><a href="account.php">ACCOUNT: <?php echo $_SESSION["user"];?></a></li>
    </ul>  

    <img src="pictures/logo.png" alt="asagraum" id=homelogo> <!--https://thisisblackmetal.com/interview-asagraum/-->
    <br>
    <div class="center">
    <p><i>Welcome to the Asagraum domain, home of the fierce furies of the North.</i></p>
    </div>
    <br>
    <footer>
        <div class="center">
            <a href="cookie.html">COOKIE POLICY</a>
            </div>
    </footer>
    
</body>
</html>