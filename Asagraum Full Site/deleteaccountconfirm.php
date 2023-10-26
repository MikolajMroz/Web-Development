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
<?php
//connection details
$servername = "lochnagar.abertay.ac.uk";
$dbusername = "sql2003114";
$dbpassword = "z8qDSGvyXtDV";
$dbname = "sql2003114";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

$username = mysqli_real_escape_string($conn, $_POST['user']);
$password = mysqli_real_escape_string($conn, $_POST['pass']);

$sql ="DELETE FROM CMP204_logon WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username); //bind variable to each "?"
$stmt->execute(); //Send query
header("location: index.php");

mysqli_close($conn);
?>
</div>
</body>
</html>