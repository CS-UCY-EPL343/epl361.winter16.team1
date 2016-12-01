
function myFunction3() {
	window.location = "playing_now.html?" + username;
}


var username = window.location.search;
username = username.substring(10)



var element = document.getElementById('myElement');
var btn = document.getElementById("myButton");
var close = document.getElementsByClassName("close")[0];

btn.onclick = function() {
	element.style.display = "block";
	//open the instructions
};

close.onclick = function() {
	element.style.display = "none";
	//close the window if you click x
};

window.onclick = function(event) {
	if (event.target == element) {
		element.style.display = "none";
		//close the window if you click outside of it
	}
};



var element2 = document.getElementById('myElement2');
var btn2 = document.getElementById("myButton2");
var close2 = document.getElementsByClassName("close2")[0];

btn2.onclick = function() {
	element2.style.display = "block";
	//open the instructions
};

close2.onclick = function() {
	element2.style.display = "none";
	//close the window if you click x
};

