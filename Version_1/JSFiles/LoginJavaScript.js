$(function() {

	var dialog,
	    form,

	// From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=school%29

	    name = $("#name"),
	    surname = $("#surname"),
	    school = $("#school"),
	    classroom = $("#classroom"),
	    birthdate1 = $("#birthdate1"),
	    birthdate2 = $("#birthdate2"),
	    birthdate3 = $("#birthdate3"),
	    allFields = $([]).add(name).add(surname).add(school).add(classroom).add(birthdate1).add(birthdate2).add(birthdate3),
	    tips = $(".validateTips");

	function updateTips(t) {

		tips.text(t).addClass("ui-state-highlight");

		setTimeout(function() {

			tips.removeClass("ui-state-highlight", 1500);

		}, 500);

	}

	function checkLength(o, n, min, max) {

		if (o.val().length > max || o.val().length < min) {

			o.addClass("ui-state-error");

			updateTips("Το μήκος " + n + " πρέπει να είναι μεταξύ " + min + " και " + max + ".");

			return false;

		} else {

			return true;

		}

	}

	function checkRegexp(o, regexp, n) {

		if (!( regexp.test(o.val()) )) {

			o.addClass("ui-state-error");

			updateTips(n);

			return false;

		} else {

			return true;

		}

	}

	function addUser() {

		var valid = true;

		allFields.removeClass("ui-state-error");

		valid = valid && checkLength(name, "Ονομα", 3, 16);

		valid = valid && checkLength(surname, "Επώνυμο", 5, 25);

		valid = valid && checkRegexp(name, /^([α-ωΑ-Ωa-zA-ZάέίόύώΆΈΌΊΎΏ\s])+$/, "Χρησιμοποίησε μόνο χαρακτήρες του Ελληνικού και Αγγλικού αλφαβήτου!");

		valid = valid && checkRegexp(surname, /^([α-ωΑ-Ωa-zA-ZάέίόύώΆΈΌΊΎΏ\s])+$/, "Χρησιμοποίησε μόνο χαρακτήρες του Ελληνικού και Αγγλικού αλφαβήτου!");

		if (valid) {

			$("#users tbody").append("<tr>" + "<td>" + name.val() + "</td>" + "<td>" + surname.val() + "</td>" + "<td>" + school.val() + "</td>" + "<td>" + classroom.val() + "</td>" + "<td>" + birthdate1.val() + "</td>" + "<td>" + birthdate2.val() + "</td>" + "<td>" + birthdate3.val() + "</td>" + "</tr>");

			var newuser = name.val().charAt(0) + surname.val().charAt(0) + surname.val().charAt(1) + surname.val().charAt(2) + surname.val().charAt(3) + surname.val().charAt(4);

			//this count is returned from database
			var database_same_usernames_count = 0;

			if (database_same_usernames_count < 10) {
				newuser += database_same_usernames_count;
			}
			newuser += ++database_same_usernames_count;

			//newuser must be saved in database

			alert("Καλωςορίσατε!! Το όνομα χρήστη σας είναι : " + newuser);

			dialog.dialog("close");

		}

		return valid;

	}

	dialog = $("#dialog-form").dialog({

		autoOpen : false,

		height : 400,

		width : 450,

		modal : true,

		buttons : {

			"Create an account" : addUser,

			Cancel : function() {

				dialog.dialog("close");

			}
		},

		close : function() {

			form[0].reset();

			allFields.removeClass("ui-dialog-titlebar-close'");

		}
	});

	form = dialog.find("form").on("submit", function(event) {

		event.preventDefault();

		addUser();

	});

	$("#create-user").button().on("click", function() {

		dialog.dialog("open");

	});

});



var modal = document.getElementById('myModal');

var btn = document.getElementById("Diaxeiristis");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
	modal.style.display = "block";
}
span.onclick = function() {
	modal.style.display = "none";
}






function redirectComment() {

	window.location = "Comments.html";

}

function printName() {

	var input = document.getElementById("username").value;
	alert(input);

}
