
<?php

$email=mysqli_real_escape_string($conn, $_POST['email']);
$sql = "SELECT email FROM users WHERE EMAIL = '$email' ";
$select = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($select);

if (mysqli_num_rows($row) > 0) {
	echo "exists";
}
?>