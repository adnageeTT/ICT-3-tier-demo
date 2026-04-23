function validate(){

	clearErrors();
	
	//declare variables in js with the keyword var
	let valid = true;
		
	///////////////////// validate the first name data ////////////////////
	let fname_element = document.getElementById('fname');// retrieves the input object with ID fname.
	let fname_regex = /^[a-zA-Z'-]{2,30}$/;

	// validate fname
	if(!fname_regex.test(fname_element.value)){
		var fn_err = document.getElementById('fname_err');
		fn_err.innerHTML = "Only letters, ' and - allowed.";		
		valid = false;
	}

	//////////////////// validate the last name data ////////////////////
	let lname_element = document.getElementById('lname');// retrieves the input object with ID fname.
	let lname_regex = /^[a-zA-Z'-]{2,30}$/;

	// validate fname
	if(!lname_regex.test(lname_element.value)){
		let ln_err = document.getElementById('lname_err');
		ln_err.innerHTML = "Only letters, ' and - allowed.";		
		valid = false;
	}

	//////////////////// validate the email data ////////////////////
	let email_element = document.getElementById('email');// retrieves the input object with ID fname.
	let email_regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,50}$/;

	// validate email
	if(!email_regex.test(email_element.value)){
		let em_err = document.getElementById('email_err');
		em_err.innerHTML = "Please enter a valid email address";		
		valid = false;
	}


	return valid;
	
}

function clearErrors(){
	let errors = document.getElementsByClassName('error');
	for(let i = 0; i < errors.length; i++){
		errors[i].innerHTML = "";
	}
	
}