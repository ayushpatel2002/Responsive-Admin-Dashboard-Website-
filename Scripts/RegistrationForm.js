function checkForm() 
{
  //collecting user inputs 
  firstname = document.getElementById("firstname").value;
  surname = document.getElementById("surname").value;
  phone = document.getElementById("phone").value;
  var ageDiscount;
  var studentDiscount;
  var unempDiscount;
  var totalDiscount; 
  initialFee = 10.00;
   //calls another function IsNumeric 
  phoneNumeric = IsNumeric(phone);
  email = document.getElementById("email").value;
   //calls another function checkEmail
  emailResult = checkEmail(email);
  age = Number(document.getElementById("myRange").value);
  var student = new Boolean(false);
  if (age >= 16 && age <= 20){
      student = true;
  }

	//checking for empty inputs and displaying error 
    if (firstname == "") 
    { 
	hideAllErrors();
	document.getElementById("firstnameError"). style.display = "inline-block";
	document.getElementById("firstname").select();
	document.getElementById("firstname").focus();
	return false;
    }

    else if (surname == "") 
    {   
	hideAllErrors();
	document.getElementById("surnameError"). style.display = "inline";
	document.getElementById("surname").select();
	document.getElementById("surname").focus();
    return false;
    }

    else if (phone == "") 
    {   
	hideAllErrors();
	document.getElementById("phoneError"). style.display = "inline";
	document.getElementById("phone").select();
	document.getElementById("phone").focus();
	return false;
    }
    
    else if (phoneNumeric == false) 
    {   
	hideAllErrors();
	document.getElementById("phoneError"). style.display = "inline";
	document.getElementById("phone").select();
	document.getElementById("phone").focus();
	return false;
    }
 
 
    else if (email == "") 
   {
	hideAllErrors();
	document.getElementById("emailError"). style.display = "inline";
	document.getElementById("email").select();
	document.getElementById("email").focus();
	return false;
    }
 
    else if (emailResult == false)
    {
        hideAllErrors();
        document.getElementById("emailError"). style.display = "inline";
        document.getElementById("email").select();
        document.getElementById("email").focus();
        return false;
    }
 
// this is to tell user all validation is now complete
alert("First Name:" + firstname + "\n Surname:" + surname + "\n Phone Number:" + phone + "\n Email:" + email + "\n your age is:" + age);

  return true;
}


//checks via reg ex if age and phone numbers are numbers
function IsNumeric(numstr)
{
    mystring = numstr;
    if (mystring.match(/^\d+$/ ) ) {
    
	    return true;
    }else{
	    return false;
    }
}


//checks if email is in proper email format
function checkEmail(inputvalue){	
    var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    if(pattern.test(inputvalue)) {         
		return true;
    }else{   
		return false;
    }
    
}
// hide error upon successful validation
function hideAllErrors()
{  
  document.getElementById("firstnameError").style.display = "none";
  document.getElementById("surnameError").style.display = "none";
  document.getElementById("phoneError").style.display = "none";
  document.getElementById("emailError").style.display = "none";  
}

// Calulator code starts from here



