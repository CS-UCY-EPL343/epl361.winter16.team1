<?php
session_start();

include 'connectDB.php';
?>
<?php
$email = "";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$sql = "SELECT EMAIL FROM users WHERE EMAIL = '$email' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);

// Mysql_num_row is counting table row
$count = mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row

$type = mysqli_real_escape_string($conn, $_POST['type']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['user_password']);
$encpassword = sha1($password);
$name = mysqli_real_escape_string($conn, $_POST['first_name']);
$surname = mysqli_real_escape_string($conn, $_POST['last_name']);
$school = mysqli_real_escape_string($conn, $_POST['school']);
if ($type == "Μαθητης")
	$verified = true;
else {
	$verified = false;
}
if ($count == 0) {
	mysqli_query($conn, 'set character set UTF8');
	mysqli_query($conn, "SET NAMES 'utf8'");
	mysqli_query($conn, "INSERT INTO users (TYPE,EMAIL,PASSWORD,NAME,SURNAME,SCHOOL,VERIFIED)
	values ('$type','$email','$encpassword','$name','$surname','$school','$verified')");
	$_SESSION['message'] = 'Η εγγραφή έγινε επιτυχώς! ';
	if ($type == "Καθηγητης")
		$_SESSION['message'] = 'Θα μπορέσετε να εχετε πρόσβαση στο λογαριασμό σας μολις επιβεβαιωθεί!';
	header('Location:../HTMLFiles/LoginPage_2a.php');

} else {
	$_SESSION['message'] = 'Υπαρχει ηδη λογαριασμός με αυτή την ηλεκτρονική διεύθυνση!' ;
	header('Location:../HTMLFiles/login.php');
}
?>