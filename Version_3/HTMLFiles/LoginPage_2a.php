<?php
session_start();
if (!isset($_SESSION['user_logged']))
	$_SESSION['user_logged'] = "false";
else
	$_SESSION['login_error']=0;
if (!empty($_SESSION['message'])) {
    echo '<div class="alert alert-info"> '.$_SESSION['message'].'</div>';
    unset($_SESSION['message']);
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

		<link href="../CSSFiles/cover.css" rel="stylesheet">
		<!-- Custom styles for this template -->

	</head>

	<body>
		<?php
		require '../PHP/navbar1.php';
	?>
		<div class="container">
			<br>
			<br>
			<br>
			<h1 class="cover-heading">Καλωσόρισες στο eFollow!</h1>
			<p class="lead">
				<a class="btn btn-lg btn-default" href="playing_now_fixed.html">ΠΑΙΞΕ ΤΩΡΑ !</a>
			</p>

		</div>

		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							&times;
						</button>
						<h4 class="modal-title">ΟΔΗΓΙΕΣ ΠΑΙΧΝΙΔΙΟΥ</h4>
					</div>
					<div class="modal-body" >
						<h3>ΣΤΟΧΟΣ ΠΑΙΧΝΙΔΙΟΥ</h3>
						Στόχος του παιχνιδιού είναι να φτάσεις στο τελευταίο κουτάκι του παιχνιδιού, που περιέχει τον αριθμό 45, με την μεγαλύτερη βαθμολογία που μπορείς να μαζέψεις. Για να το πετύχεις αυτό, το μόνο που έχεις να κάνεις είναι να απαντάς σωστά τις ερωτήσεις που εμφανίζονται. Έτσι θα κερδίζεις πόντους και θα προχωράς βήματα μπροστά.
						<br />
						<br />
						<h3>ΠΑΙΖΟΝΤΑΣ</h3>
						Το παιχνίδι ξεκινά από το κουτάκι START. Ρίχνεις το ζάρι πατώντας το κουμπί «Ρίξε ζάρι» και βλέπεις τον αριθμό που πέτυχες. Στη συνέχεια σου εμφανίζεται η ερώτηση με 4 επιλογές απάντησης. Επιλέγεις την απάντηση που θεωρείς σωστή και πατάς το κουμπί «Επιλογή απάντησης» για να καταχωρήσεις αυτό που επέλεξες. Τότε εμφανίζεται στην οθόνη σου η σωστή απάντηση και η δικαιολογία γιατί είναι αυτή η σωστή. Αν απαντήσεις σωστά, προχωράς τόσα βήματα όσα λέει το ζάρι και κερδίζεις πόντους. Αν απαντήσεις λάθος, παραμένεις στην ίδια θέση και χάνεις πόντους.  Για να δεις τον βαθμό που συγκέντρωσες μπορείς να πατήσεις το κουμπί «Δες την βαθμολογία σου».
						<br />
						Το παιχνίδι τελειώνει όταν φτάσεις στον αριθμό 45!!!
						<br />
						<br />
						<br />
						<h4> ΕΛΑΤΕ ΝΑ ΜΑΘΟΥΜΕ ΤΙ ΕΙΝΑΙ ΤΟ ΨΗΦΙΑΚΟ ΑΠΟΤΥΠΩΜΑ...</h4>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-dismiss="modal">
							Close
						</button>
					</div>
				</div>

			</div>
		</div>

		<!-- Modal -->
		<div id="myModal2" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							&times;
						</button>
						<h4 class="modal-title">ΟΔΗΓΙΕΣ ΠΑΙΧΝΙΔΙΟΥ</h4>
					</div>
					<div class="modal-body" >
						<h3>Σχετικά με το παιχνίδι</h1> <h4>Αυτό το παιχνίδι δημιουργήθηκε στα πλαίσια του μαθήματος Τεχνολογίας Λογισμικού στο Πανεπιστήμιο Κύπρου, σε συνεργασία με το Υπουργείο Παιδείας.
						<br>
						<br>
						Δημιουργοί:
						<br>
						- Καράπετρης Μάριος
						<br>
						- Κασινίδου Μαρία
						<br>
						- Κούττουκου Έλενα
						<br>
						- Κυριάκου Κυριάκος
						<br>
						- Λοΐζου Λοΐζος
						<br>
						- Παπαδοπούλου Ραφαηλία
						<br>
						<br>
						Θερμές ευχαριστίες στην καθηγήτρια και στους βοηθούς του μαθήματος για την τεράστια βοήθεια που μας πρόσφεραν.
						<br>
						- κα. Καπιτσάκη Γεωργία
						<br>
						- κ. Μπράτσκας Πύρρος, κ. Αντωνίου Παύλος
						<br>
						</h4><h3>eFollowMe Team1 ©</h2>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-dismiss="modal">
							Close
						</button>
					</div>
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

