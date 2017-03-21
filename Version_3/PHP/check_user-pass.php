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
mysqli_query($conn, 'set character set UTF8');
mysqli_query($conn, "SET NAMES 'utf8'");
$username = "";
$password = "";
$user = "";
// Define $username and $password
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
// To protect MySQL injection (more detail about MySQL injection)
$decpassword = "";
$decpassword = mysqli_real_escape_string($conn, sha1($password));
$sql = "SELECT * FROM users WHERE EMAIL='$username' and PASSWORD='$decpassword'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);
// Mysql_num_row is counting table row
$count = mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count == 1) {
	if ($row['VERIFIED'] == "0") {
		$_SESSION["user_logged"] = "false";
		$_SESSION["login_error"] = 0;		
		$_SESSION['message'] = 'Ο λογαριασμός σας δεν έχει ακόμα επιβεβαιωθεί!';
		header('Location:../HTMLFiles/login.php');
	} else {
		$_SESSION["user_logged"] = "true";
		$_SESSION["user"] = $row['NAME'];
		$_SESSION["login_error"] = 0;
		$_SESSION["name"] = $row['NAME'];
		$_SESSION["surname"] = $row['SURNAME'];
		$_SESSION["email"] = $row['EMAIL'];
		$_SESSION["school"] = $row['SCHOOL'];
		header('Location:../HTMLFiles/LoginPage_2a.php');
	}	

} else {

	$_SESSION["user_logged"] = "false";
	$_SESSION["login_error"] = 1;
	header("Location: ../HTMLFiles/login.php");

}

$conn -> close();
?>