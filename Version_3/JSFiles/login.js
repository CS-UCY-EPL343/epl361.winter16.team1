function testFunc() {
        var divs = document.getElementsByClassName("newscontainer");
        for (var i = 0; i < divs.length; i++) {
            divs[i].style.display = 'none';
        }
        var myDiv = item.href;
        var target = myDiv.split("#");
        document.getElementById(target[1]).style.display = "block";
    }