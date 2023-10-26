<?php
//connection details
$servername = "lochnagar.abertay.ac.uk";
$dbusername = "sql2003114";
$dbpassword = "z8qDSGvyXtDV";
$dbname = "sql2003114";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

$username = mysqli_real_escape_string($conn, $_POST['user']); //Takes users input from previous page..
$oldpassword = mysqli_real_escape_string($conn, $_POST['oldpass']);
$newpassword = mysqli_real_escape_string($conn, $_POST['newpass']);
$hash = password_hash($newpassword, PASSWORD_DEFAULT); //hashes password

$sql ="UPDATE CMP204_logon SET password = ? WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $hash, $username); //bind variable to each "?"
$stmt->execute(); //Send query
$result = $stmt->get_result();
$user = $result->fetch_assoc();
header("location: index.php");
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

</body>
</html>