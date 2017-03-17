<?php
session_start();
if (!isset($_SESSION['user_logged']))
	$_SESSION['user_logged'] = "false";
else
	$_SESSION['login_error'] = 0;
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<!-- Bootstrap core CSS -->
		<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="../dist/css/bootstrap.css" rel="stylesheet">


		<title>Εγγραφή</title>
	</head>
	<body>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="../JSFiles/jquery.min.js"><\/script>');
		</script>
		<script src="../dist/js/bootstrap.min.js"></script>
		<script src="../JSFiles/modal.js"></script>
	</body>
</html>