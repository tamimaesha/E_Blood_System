function validateForm(){
	// alert();
	var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z0-9]*\.[A-Za-z]{2,5}$/;
	var fname = document.getElementById('fname').value;
	var	lname = document.getElementById('lname').value;
	var	femail = document.getElementById('email').value;
	var	freemail = document.getElementById('reemail').value;
	var	fpassword = document.getElementById('password').value;
		
	if( fname == "" )
   {
     document.form.Name.focus() ;
	 document.getElementById("errorBox").innerHTML = "Please Enter your First Name";
     return false;
   }else if(isNaN(fname) == false){
	  document.form.Name.focus() ;
      document.getElementById("errorBox").innerHTML = "Please Enter Only Character";
     return false;
   }
   
	if( lname == "" )
   {
      document.form.LastName.focus() ;
	  document.getElementById("errorBox").innerHTML = "Please Enter your Last Name";
     return false;
   }else if(isNaN(lname) == false){
	  document.form.Name.focus() ;
      document.getElementById("errorBox").innerHTML = "Please Enter Only Character";
     return false;
   }
   
   if (femail == "" )
	{
		document.form.Email.focus();
		document.getElementById("errorBox").innerHTML = "Please Enter Your Email Address";
		return false;
	 }else if(!emailRegex.test(femail)){
		document.form.Email.focus();
		document.getElementById("errorBox").innerHTML = "Email Address is not Valid";
		return false;
	 }
	 
	  if (freemail == "" )
	{
		document.form.enterEmail.focus();
		document.getElementById("errorBox").innerHTML = "Re-enter the email";
		return false;
	 }else if(!emailRegex.test(freemail)){
		document.form.enterEmail.focus();
		document.getElementById("errorBox").innerHTML = "Email Address is not Valid";
		return false;
	 }
	 
	 if(freemail !=  femail){
		 document.form.enterEmail.focus();
		 document.getElementById("errorBox").innerHTML = "Emails Address are not matching, Re-Enter again";
		 return false;
		 }
	 
	 
	if(fpassword == "")
	 {
		 document.form.Password.focus();
		 document.getElementById("errorBox").innerHTML = "Please Enter Your Password";
		 return false;
	 }
	 
		if(document.form.Gender[0].checked == false && document.form.Gender[1].checked == false){
				document.getElementById("errorBox").innerHTML = "Please Select Your Gender";
			 return false;
			}
		if(fname != '' && lname != '' && femail != '' && freemail != '' && fpassword != ''){
			return true;
			}
		  
}
