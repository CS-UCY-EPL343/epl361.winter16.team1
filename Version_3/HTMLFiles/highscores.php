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
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
		<title>eFollowMe</title>

		<!-- Bootstrap core CSS -->
		<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="../dist/css/bootstrap.css" rel="stylesheet">
		<link href="../CSSFiles/submitForm.css" rel="stylesheet">

		<link href="../CSSFiles/cover.css" rel="stylesheet">
		<!-- Custom styles for this template -->

	</head>

	<body>
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

		<?php
		require '../PHP/navbar1.php';
		?>
		<div class="col-xs-6">
			<div class="w3-container w3-teal">
				<div class="table-responsive" >
					<table class="table " >
						   <caption style="color:white">Ατομικά σκορ</caption>
						<thead>
							<tr>
								<th style="text-align:center">Θεση</th>
								<th style="text-align:center">Όνομα</th>
								<th style="text-align:center">Βαθμολογία</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include '../PHP/connectDB.php';
							?>
							<?php

							$sql = "SELECT NAME, SURNAME, SCORE FROM users ORDER BY SCORE DESC";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_array($result, MYSQL_ASSOC);

							// Mysql_num_row is counting table row
							$count = mysqli_num_rows($result);
							$rank = 1;

							if (mysqli_num_rows($result)) {
								while ($row = mysqli_fetch_assoc($result)) {
									echo "<tr><td>{$rank}</td><td>{$row['NAME']} {$row['SURNAME']}</td><td>{$row['SCORE']}</td></tr>";
									$rank++;
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="w3-container w3-teal">
				<div class="table-responsive" >
					<table class="table table-stripped" >
						   <caption style="color:white">Βαθμολογίες Σχολείων</caption>
						<thead>
							<tr>
								<th style="text-align:center">Θεση</th>
								<th style="text-align:center">Όνομα Σχολείου</th>
								<th style="text-align:center">Συνολική Βαθμολογία</th>
							</tr>
						</thead>
						<tbody>

							<?php

							$sql1 = "SELECT SCHOOL,SUM(SCORE) FROM users GROUP BY SCHOOL ORDER BY SUM(SCORE) DESC ";
							$result1 = mysqli_query($conn, $sql1);								
							$rank1 = 1;						
							while ($row1 = mysqli_fetch_array($result1, MYSQL_ASSOC)) {
									echo "<tr><td>{$rank1}</td><td>{$row1['SCHOOL']}</td><td> {$row1['SUM(SCORE)']}</td></tr>";
									$rank1++;
								}
							
							?>
						</tbody>
					</table>
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