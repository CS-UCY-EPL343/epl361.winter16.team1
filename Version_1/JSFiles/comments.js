function RedirectBack() {
			window.location="../HTMLFiles/index.html";
		}
	
	
	
		function save() {
			var text_to_save = document.getElementById('commentsBox').value;
			localStorage.setItem("commentsBox", text_to_save);
			var x = document.getElementById('commentsBox').value;
			if (x == null || x == "") {
				alert("Το πεδίο δεν μπορεί να μείνει άδειο.");
				return false;
			} else {
				alert("Ευχαριστούμε για τα σχόλιά σας!");
			}

		}