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

<div class ="login">
    <form action="https://mayar.abertay.ac.uk/~2003114/cmp204/coursework2/deleteaccountconfirm.php" method="post" id=login>
    <h3>Please enter the login details you wish to delete.</h3>
    <br>
    Username: <input type="text" name = "user">
    <br><br>
    Password: <input type="password" name = "pass">
    <br><br>
    <div id = submit>
    <input type="submit" value="DELETE ACCOUNT">
    </div>
</div>
<br>
<br>
    <footer>
        <div class="center">
            <a href="cookie.php">COOKIE POLICY</a>
    </footer>
    <br>

</body>
</html>