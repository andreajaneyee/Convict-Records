function selectedElement(elementName) {
	var nameBox = document.forms["MessageForm"].elements[elementName];

	nameBox.style.backgroundColor = "rgba(255, 109, 44, 0.76)";
}


function deselectedElement(elementName) {
	var nameBox = document.forms["MessageForm"].elements[elementName];

	nameBox.style.backgroundColor = "white";
}


function validateForm() {
    var x = document.forms["MessageForm"]["name"].value;
    var y = document.forms["MessageForm"]["email"].value;
    var z = document.forms["MessageForm"]["subject"].value;
    var a = document.forms["MessageForm"]["message"].value;
    if (!x == null || !x == "" || !y == null || !y == "" || !z == null || !z == "" || !a == null || !a == "" ) {
        alert("Your message has been sent.");
        return false;
    }
}