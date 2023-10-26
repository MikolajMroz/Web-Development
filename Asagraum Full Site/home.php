<?php
session_start();

//Show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
<?php
//Connection Information
$servername = "lochnagar.abertay.ac.uk";
$dbusername = "sql2003114";
$dbpassword = "z8qDSGvyXtDV";
$dbname = "sql2003114";
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
if (!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}

$username = $_POST["user"];
$password  = $_POST["pass"];
$hash = password_hash($password, PASSWORD_DEFAULT); //

$sql ="SELECT * FROM CMP204_logon WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username); //bind variable to each "?"
$stmt->execute(); //Send query
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>
    <ul id=navbar> <!--structure navbar-->
    <li ><a href="home2.php">HOME</a></li>
    <li ><a href="info.php">INFO</a></li>
    <li ><a href="discography.php">DISCOGRAPHY</a></li>
    <li ><a href="account.php">
<?php
        if(password_verify($password, $user['password'])){
        $_SESSION["user"] = $username;
        printf ("ACCOUNT: %s", $username);
        } else {
		header("location: index.php");
    }?>
    </a></li>
    </ul>  

    <img src="pictures/logo.png" alt="asagraum" id=homelogo> <!--https://thisisblackmetal.com/interview-asagraum/-->
    <br>
    <div class="center">
    <p><i>Welcome to the Asagraum domain, home of the fierce furies of the North.</i></p>
    </div>
    <br>
    <footer>
        <div class="center">
            <a href="cookie.php">COOKIE POLICY</a>
            </div>
    </footer>

<?php 

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
</body>
</html>