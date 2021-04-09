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

//check if email is empty or in incorrect format and shows an error
function validate_email(){
	var email = document.getElementById("email").value;
	if (email == "") {
		document.getElementById("message_email").innerHTML = "email is necessary";
	}else{
		var email_chars = email.split(""); //array email chars
		var arroba = false; //contains @?
		var arroba_position = 0; //in wich position
		var dot = false; //contains .?
		var dot_position = 0; //in wich position
		var domain = false; //have a domain?

		//check if is contains an arroba and dot and save the position of each
		for (n = 0; n < email_chars.length; n++){ //check char by char
			if(email_chars[n] == "@"){ //@ exist
				arroba = true; arroba_position = n;
			}else	if (email_chars[n] == "."){ //dot exist
				dot = true; dot_position = n;
			}
		}

		//check if exist something after the dot (the domain)
		if(!(typeof email_chars[dot_position+1] === 'undefined')) {
    	domain = true;
		}

		//check if have an arroba, dot, in correct postion and if have domain
		if (arroba == true && dot == true && arroba_position < dot_position && domain == true) {
			document.getElementById("message_email").innerHTML = "";
			return true; //Yes! it's a real email (or it seems like it)
		}else{
			document.getElementById("message_email").innerHTML = "this email does not seem correct";
		}
	}
}

//check if password is empty and his strength
function validate_password(){
	var pass = document.getElementById("password").value;
	if (pass == "") {
		document.getElementById("message_password").innerHTML = "password is necessary";
	}else{
		if(pass.length < 8) { //minimum 8 chars
			document.getElementById("message_password").innerHTML = "8 characters minimum";
		}else{
			var characters = pass.split(""); //array chars
			var mayus = 0; //count Upper chars
			var minus = 0; //count lower chars
			var nums  = 0; //count int numbers
			var spec  = 0; //count special chars

			//check if is contains a num or minus or mayus
			for (n = 0; n < characters.length; n++){ //check char by char
				if(characters[n] == parseInt(characters[n])){ //if is num
					nums++;
				}else	if (characters[n] == characters[n].toLowerCase()){ //if minus
					minus++;
				}else if (characters[n] == characters[n].toUpperCase()){ //if mayus
					mayus++;
				}
			}

			//check if exist some special char
			special_chars = "[-’/`~!¡#*$@_%+=.,^&(){}[|;:<>?¿]"; //special chars allowed
			for (n = 0; n < characters.length; n++){ //check char by char
				if(special_chars.includes(characters[n])) {
					spec++;
					minus = minus-spec; //the special character was previously previously counted as lowercase
				}
			}
			//console.log("n: "+nums, "m: "+minus, "M: "+mayus, "S: "+spec, "T: "+characters.length); //shows password minus, mayus, nums and specialchars

			if (nums != 0 && minus != 0 && mayus != 0 && spec != 0){ //check if have nums, minus, mayus and specs
				document.getElementById("message_password").innerHTML = "";
				return true
			}else{ //shows error
				document.getElementById("message_password").innerHTML = "Password needs uppercase, lowercase, numbers and special chars";
			}
		}
	}
}

//check if password is empty an shows an error and if pass and pass2 are different.
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
