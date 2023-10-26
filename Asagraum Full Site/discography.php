<?php
session_start();
?>
<!doctype html>
<html lang="en">                                                                                    <!--define language (english)-->
<head>
	<meta charset="utf-8">                                                                          <!--define character set-->
    <title>Asagraum - Unofficial Website</title>                                                       <!--set title of the site, displayed on the browser tab-->
    <link rel="icon" href="pictures/icon.png">                                                      <!-- import custom icon :) --> <!--by me-->
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
<br>
    <div class ="container"> <!--creates bootstrap container which scales with window size-->
        <h3>"Dawn of Infinite Fire (2019)"</h3>
        <br>
    <div class="row"> <!--creates bootstrap row with 12 spaces-->
        <div class="col-sm-4"> <!--this section uses up 4 of these spaces-->
           
            <img src="pictures/DawnOfInfiniteFire.png" alt="DawnofInfiniteFire" class=album> <!--displays the album art in the 4-space section-->
            <br>
            <a href="https://edgedcircleproductions.bandcamp.com/album/dawn-of-infinite-fire">--PURCHASE--</a>
        </div>
        <div class="col-sm-8">
        <p><b>Asagraum's</b> latest release which rocked the black metal world with its ferocity, bringing the band's legendary status up to that of long-timers like Dark Fortress and Emperor in a fraction of the time. </p>
        <p><b>Asagraum</b> explore various sounds throughout the record, from melodic tracks like <b>'Dawn of Infinite Fire'</b>, <b>'Abomination's Altar'</b>, and <b>'GUAHAIHOQUE'</b>, inspired by similar melodic acts like <b>Emperor</b> and <b>Gehenna</b>, to the chaotic discord and dissonance of <b>'The Lightless Inferno'</b> and <b>'They Crawl from the Broken Circle'</b>, à la <b>Deathspell Omega.</b></p>
        <div id = "reviews1"></div> 
        <div id = "button1"><button type = "button">Show review quotes</button></div> <!--button that when pressed, sends a request to the server for further information using ajax-->
        
        </div>
    </div>
<br>
<h3>"Potestas Magicum Diaboli (2017)"</h3>
<br>
        <div class="row">
        <div class="col-sm-4">
            
            <img src="pictures/PotestasMagicumDiaboli.png" alt="PotestasMagicumDiaboli" class=album>
            <br>
            <a href="https://kvltfinland.bandcamp.com/album/potestas-magicum-diaboli">--PURCHASE--</a>
        </div>
        <div class="col-sm-8">
            <p>The band's debut album, characterised by its swirling rhythms and incredible speed, not unlike what you'd hear falling through the spiral to hell itself. <b>Asagraum</b> create a dark, energetic, ritualistic atmosphere which they have expanded on their subsequent release, <b>Dawn of Infinite Fire</b>.</p>
            <div id = "reviews2"></div>
            <div id = "button2"><button type = "button">Show review quotes</button></div> <!--button that when pressed, sends a request to the server for further information using jquery ajax-->
            <br>
        </div>
    </div>
</div>

    <footer>
        <div class="center">
            <br>
            <a href="cookie.php">COOKIE POLICY</a>
    </footer>
    
</body>
</html>