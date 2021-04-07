//check if username is empty an shows an error
function validate_username(){
	var username = document.getElementById("username").value;
	if (username == "") {
		document.getElementById("message_username").innerHTML = "username is necessary";
	}else{
		document.getElementById("message_username").innerHTML = "";
		return true;
	}
}

//check if password is empty an shows an error
function validate_password(){
	var pass = document.getElementById("password").value;

	//this needs improvement. Must check password strong.
	if (pass == "") {
		document.getElementById("message_password").innerHTML = "password is necessary";
	}else{
		document.getElementById("message_password").innerHTML = "";
		return true;
	}

}

//check if password is empty an shows an error
function validate_password2(){
	var pass = document.getElementById("password").value;
	var pass2 = document.getElementById("password2").value;
	if (pass2 == "") {
		document.getElementById("message_password2").innerHTML = "password is necessary";
	}else if (pass != pass2){
		document.getElementById("message_password2").innerHTML = "passwords don't match";
	}else{
		return true;
	}
}

//check the fields and return true or false. If true, the form will be submitted
function validate_register() {
	if (validate_username() && validate_password() && validate_password2()){
		return true;
	}else{
		return false;
	}
}
