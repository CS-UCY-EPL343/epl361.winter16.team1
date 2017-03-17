<?php
session_start();
if (!isset($_SESSION['login_error']))
	$_SESSION['login_error'] = 0;

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

		<title>eFollowMe</title>

		<!-- Bootstrap core CSS -->
		<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="../dist/css/bootstrap.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
		<link href="../css/login.css" rel="stylesheet">

	</head>

	<body>
	

		<?php
		require '../PHP/navbar1.php';
	?>

		<div class="container" >
			<script id="metamorph-1-start" type="text/x-placeholder"></script><script id="metamorph-21-start" type="text/x-placeholder"></script>
			<div style width="30%">
				<div class="container text-center  ">
					<form class="form-signin " data-ember-action="2" action="../PHP/check_user-pass.php" method="POST">
						<h2 class="form-signin-heading">Είσοδος</h2>
						<br>
						<p style="font-weight: bolder;color: red">
						<?php
						if ($_SESSION['login_error']== 1)	
							echo 'incorrect username/ password please try again.';						
						?>		
						<p/>
					
						<div class="container" align="center">
							<input id="ember360" name="username" class=" ember-view ember-text-field form-control login-input col-xs-4 "  style= "float:inherit" placeholder="Email Address" type="text" >

							<input id="ember361" name="password" class="ember-view ember-text-field form-control login-input-pass col-xs-4 "  style= "float:inherit" placeholder="Password" type="password">
							<br>
							<script id="metamorph-22-start" type="text/x-placeholder"></script><script id="metamorph-22-end" type="text/x-placeholder"></script>
							<div class="col-xs-4" style= "float:inherit">
								<button class="btn btn-lg btn-primary btn-block btn-center " type="submit" data-bindattr-3="3">
									Sign in
								</button>
							</div>
						</div>
						<br>
						</form>
						<small class="create-account text-muted">Δεν έχετε λογαριασμό? Εγγραφείτε τωρα
							<button id="ember363" class="ember-view btn btn-sm btn-default" onclick="location.href='registerForm.php'">
								Εγγραφή
							</button> </small>							
						
					
				</div>
			</div>
		</div>

		

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="../JSFiles/jquery.min.js"><\/script>')
		</script>
		<script src="../dist/js/bootstrap.min.js"></script>
		<script src="../JSFiles/modal.js"></script>

	</body>
</html>
?>
