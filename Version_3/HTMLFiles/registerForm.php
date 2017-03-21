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
		<script type="text/javascript" src="../JSFiles/SignUp.js"></script>
		<!-- Bootstrap core CSS -->
		<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="../dist/css/bootstrap.css" rel="stylesheet">

		<title>Εγγραφή</title>
	</head>
	<body>
			
		<div class="container">
			<form name="registerr" class="well form-horizontal"  action="../PHP/registerUser.php" onSubmit="return validate();" method="post"  id="contact_form">
				<fieldset>

					<!-- Form Name -->
					<legend>
						<center>
							<h2><b>Registration Form</b></h2>
						</center>
					</legend>
					<br>

					<!-- type-->

					<div class="form-group">
						<label class="col-md-4 control-label">Χρήστης</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<label class="radio-inline">
									<input checked type="radio" name="type" value="Μαθητης">
									Μαθητής</label>
								<label class="radio-inline">
									<input type="radio" name="type" value="Καθηγητης">
									Καθηγητής</label>
							</div>
						</div>
					</div>

					<!-- first name-->

					<div class="form-group">
						<label class="col-md-4 control-label">Όνομα</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input autofocus name="first_name" placeholder="Όνομα" class="form-control"  type="text" required  oninvalid="this.setCustomValidity('Γράψε το όνομα σου εδώ')"
								oninput="setCustomValidity('')">
							</div>
						</div>
					</div>

					<!-- last name-->

					<div class="form-group">
						<label class="col-md-4 control-label" >Επίθετο</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="last_name" placeholder="Επίθετο" class="form-control"  type="text" required oninvalid="this.setCustomValidity('Γράψε το επίθετο σου εδώ')"
								oninput="setCustomValidity('')">
							</div>
						</div>
					</div>

					<!-- email-->
					<div class="form-group">
						<label class="col-md-4 control-label">Ηλεκτρονική διεύθυνση</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input name="email" placeholder="abc@abc.com" class="form-control"  type="email" required oninvalid="this.setCustomValidity('Γράψε την ηλεκτρονική σου διεύθυνση εδώ')"
								oninput="setCustomValidity('')">
							</div>
						</div>
					</div>

					<!-- password-->

					<div class="form-group">
						<label class="col-md-4 control-label" >Κωδικός πρόσβασης</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="user_password" placeholder="Κωδικός Πρόσβασης" class="form-control"  type="password" required oninvalid="this.setCustomValidity('Γράψε τον κωδικό πρόσβασης εδώ')"
								oninput="setCustomValidity('')">
							</div>
						</div>
					</div>

					<!-- confirm password-->

					<div class="form-group">
						<label class="col-md-4 control-label" >Επιβεβαίωση</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="confirm_password" placeholder="Επανάλαβε τον κωδικό" class="form-control"  type="password" required oninvalid="this.setCustomValidity('Γράψε τον ίδιο κωδικό πρόσβασης εδώ')"
								oninput="setCustomValidity('')">
							</div>
						</div>
					</div>

					<!-- school-->

					<div class="form-group">
						<label class="col-md-4 control-label">Σχολείο</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="school" placeholder="Σε ποιό σχολείο πηγαίνεις?" class="form-control"  type="text" required oninvalid="this.setCustomValidity('Γράψε το όνομα του σχολείου που πηγαίνεις εδώ')"
								oninput="setCustomValidity('')">
							</div>
						</div>
					</div>

					

					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4 control-label"></label>
						<div class="col-md-4">
							<br>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<button type="submit" class="btn btn-warning" >
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							</button>
						</div>
					</div>

				</fieldset>
			</form>
		</div>
		</div><!-- /.container -->

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