function validate() {
	var verror = true;
	var name = document.getElementsByName('first_name')[0].value;
	var email = document.getElementsByName('email')[0].value;
	var password = document.getElementsByName('user_password')[0].value;
	var confirmed = document.getElementsByName('confirm_password')[0].value;
	var school = document.getElementsByName('school')[0].value;

	//check password with confirmed password
	if (password != confirmed) {
		document.getElementById("failure_message").innerHTML += "Ο κωδικός επιβεβαίωσης δεν είναι ο ίδιος με τον κωδικό προσβασης!<br>"
		document.getElementById("failure_message").style.display = "block";
		document.getElementById("success_message").style.display = "none";
		verror = false;
	} else {
		document.getElementById("success_message").innerHTML += "Η εγγραφη έγινε με επιτυχία! <br>"
		document.getElementById("success_message").style.display = "block";
		document.getElementById("failure_message").style.display = "none";
		verror = true;
	}
	return verror;
}


