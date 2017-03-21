<?php
session_start();
if (!isset($_SESSION['user_logged']))
	$_SESSION['user_logged'] = "false";

else {
	$_SESSION['login_error'] = 0;
}
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

		<link href="../CSSFiles/submitForm.css" rel="stylesheet">
		<link href="../CSSFiles/cover.css" rel="stylesheet">

		<!-- Custom styles for this template -->
	</head>
	<body >
		<?php
		require '../PHP/navbar1.php';
		?>
		<style>
			body {
				height: 100%;
				background-color: #333;
				background-size: cover;
				background-image: linear-gradient(rgba(0,0,0,0.60),rgba(0,0,0,0.60)), url("../images/LOGO.jpg");
				background-repeat: no-repeat;
				background-attachment: fixed;
			}

		</style>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="well well-sm">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								<legend class="text-center">
									Contact us
								</legend>

								<!-- Name input-->

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Όνομα:</label>
									<div class="col-md-9">
										<?php
										if (($_SESSION['user_logged']) == "true") {
											echo "<input id=\"name\" name=\"name\" type=\"text\" class=\"form-control\" value=\"" . $_SESSION["name"] . "\">";
										} else
											echo "<input id=\"name\" name=\"name\" type=\"text\" placeholder=\"Το όνομα σας\" class=\"form-control\">";
										?>
									</div>
								</div>

								<!--Surname input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="surname">Επίθετο:</label>
									<div class="col-md-9">
										<?php
										if (($_SESSION['user_logged']) == "true") {
											echo "<input id=\"surname\" name=\"surname\" type=\"text\" class=\"form-control\" value=\"" . $_SESSION["surname"] . "\">";
										} else
											echo "<input id=\"surname\" name=\"surname\" type=\"text\" placeholder=\"Το επίθετο σας\" class=\"form-control\">";
										?>
									</div>
								</div>

								<!--School -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Σχολείο:</label>
									<div class="col-md-9">
										<?php
										if (($_SESSION['user_logged']) == "true") {
											echo "<input id=\"school\" name=\"school\" type=\"text\" class=\"form-control\" value=\"" . $_SESSION["school"] . "\">";
										} else
											echo "<input id=\"school\" name=\"school\" type=\"text\" placeholder=\"Το σχολείο σας\" class=\"form-control\">";
										?>
									</div>
								</div>

								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">E-mail:</label>
									<div class="col-md-9">
										<?php
										if (($_SESSION['user_logged']) == "true") {
											echo "<input id=\"email\" name=\"email\" type=\"text\" class=\"form-control\" value=\"" . $_SESSION["email"] . "\">";
										} else
											echo "<input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Το email σας\" class=\"form-control\">";
										?>
									</div>
								</div>

								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Το μήνυμα σας:</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" placeholder="Καταχωρήστε το μήνυμα σας εδώ..." rows="5"></textarea>
									</div>
								</div>

								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 text-right">
										<button type="submit" class="btn btn-primary btn-lg">
											Καταχώρηση
										</button>
									</div>
								</div>

							</fieldset>
						</form>
					</div>
				</div>
			</div>
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
