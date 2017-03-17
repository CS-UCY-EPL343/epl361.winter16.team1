<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
			<ul class="nav navbar-nav navbar-left">
				<li class="active">
					<a href="LoginPage_2a.php">Home</a>
				</li>
				<li>
					<a href="#" data-toggle="modal" data-target="#myModal">Οδηγίες Παιχνιδιού </a>
				</li>
				<li>
					<a href="highscore.html">Βαθμολογίες</a>
				</li>
				<li>
					<a href="#" data-toggle="modal" data-target="#myModal2">Σχετικά με το παιχνίδι </a>
				</li>
				<li>
					<a href="submitQuestion.php">Επικοινωνία</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li >

					<?php
					if ($_SESSION["user_logged"] == "true") {
						echo " <a class=\"btn dropdown-toggle\" type=\"button\" \
data-toggle=\"dropdown\"> You are logged in as " . $_SESSION['user'] . "
<span class=\"caret\"></span>
<ul class=\"dropdown-menu  \">
<li><a href=\"../PHP/logout.php\">Logout</a></li>
<li class=\"divider\"></li>
</ul> </a>";

					} else
						echo "<a href=\"login.php\">Είσοδος/Εγγραφή</a>";
					?>
				</li>

			</ul>
		</div>
	</div>
</nav>

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

