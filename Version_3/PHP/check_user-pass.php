<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "efollowme";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
}
echo "Connected to Database<br />";

$username = "";
$password = "";

// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);

$sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);

// Mysql_num_row is counting table row
$count = mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count == 1) {
	echo "Success! $count";	
	$_SESSION["user_logged"] = "true";
	$_SESSION["user"]="user";
	header("Location: ../HTMLFiles/LoginPage_2a.php");	
	$_SESSION["login_error"] = 0;

} else {
	
	$_SESSION["user_logged"] = "false";		
	$_SESSION["login_error"] = 1;
	header("Location: ../HTMLFiles/login.php");	
	
}

$conn -> close();
?>