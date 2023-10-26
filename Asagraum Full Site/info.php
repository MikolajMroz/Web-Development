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
    <ul id=navbar> <!--structure navbar-->
    <li ><a href="home2.php">HOME</a></li>
    <li ><a href="info.php">INFO</a></li>
    <li ><a href="discography.php">DISCOGRAPHY</a></li>
    <li ><a href="account.php">ACCOUNT: <?php echo $_SESSION["user"];?></a></li>
    </ul>  
    <img src="pictures/logo.png" alt="asagraum" id=logo> <!--https://thisisblackmetal.com/interview-asagraum/-->

    <div class ="container">
    <div class="row">
        <div class="col-sm-8">
            <h1>ABOUT</h1>
            <p>Asagraum, from ancient Sumarian "Asag", the name of a demon with an appearance so monsterous it is known to have boiled the fish in rivers, and "Raum", the German word for room, referring to its place of summoning. This band from the Kingdom of the Netherlands live up to their name in their fierce, fiery sound and presence.</p>
            <p>Formed in 2015 by frontwoman Hanna van den Berg (Obscura) and drummer Trish Kolsvart (T.), the band originally began as an international act from the Netherlands and Norway, until T's departure from the band in 2017. Amber de Buijzer (A.) then stepped in as the new drummer later that year, forming one of black metal's most beloved two-piece bands alongside legends like Inquisition and Satyricon.</p>
            <p>The band gained quick success with their debut album "Potestas Magicum Diaboli" in 2017, with their latest release, "Dawn of Infinite Fire", solidifying their status as one of the most sonically impressive and create black metal bands of recent times.</p>    
        </div>
        <div class="col-sm-4">
            <img src="pictures/photo1.jpg" alt="asagraum1" class=bottompicrect width="450" height="300" id =infopics>
        </div>
        <div class="col-sm-8">

            <h1>UPCOMING CONCERTS</h1>
            <ul>
            <li>April 2021. Oslo, Norway. Inferno Metal Festival.</li>
            <li>May 2021. Cardiff, UK. Eradication Festival.</li>
            <li>June 2021. Göttingen, Germany. Underground Remains Open Air.</li>
            <li>June 2021. Coevorden, Netherlands. MFC's Metal Mayhem. <b>[CANCELLED]</b></li>
            <li>December 2021. São Paulo, Brazil. Extreme Hate Festival.</li>
        </ul>
            <h1>CURRENT LINE-UP</h1>
            <ul>
                <li>Hanna Van Den Berg as "Obscura"</li>
                <li>Amber de Buijzer as "A."</li>
            </ul>

            <h1>RELEASES</h1>
            <ul>
                <li>Potestas Magicum Diaboli (2017) </li>
                <li>Dawn of Infinite Fire (2019)</li>
            </ul>
        </div>
        <div class="col-sm-4">
            <img src="pictures/photo3.jpg" alt="asagraum3" class=bottompicrect width="450" height="300" id =infopics>
        </div>
</div>

<br>
    <footer>
        <div class="center">
            <a href="cookie.php">COOKIE POLICY</a>
    </footer>
    <br>
</body>
</html>