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
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!--Import Jquery, bootstrap etc.-->
    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
    <script src ="scripts/script.js"></script>      
</head>
<ul id=navbar> <!--structure navbar-->
<li ><a href="home2.php">HOME</a></li>
    <li ><a href="info.php">INFO</a></li>
    <li ><a href="discography.php">DISCOGRAPHY</a></li>
    <li ><a href="account.php">ACCOUNT: <?php echo $_SESSION["user"];?></a></li> <!--Display the username of the current login--> <!---->
</ul>  

<body>  
<br>
<div class="center">
<br>
    <p><i>You are currently signed in as: <?php echo $_SESSION["user"];?></i></p>
    <p><i>Do you wish to change your account settings?</i></p>
    <br>
    <h1><a href="changepass.php">CHANGE PASSWORD</a></h1> <!--link to change password page-->
   <br>
    <h1><a href="deleteaccount.php">DELETE ACCOUNT</a></h1> <!--link to delete account page-->
<br>
    <footer>
        <div class="center">
            <a href="cookie.php">COOKIE POLICY</a> <!--link to cookie page-->
    </footer>
    <br>

</body>
</html>