
function validateuser()
{
var name=document.getElementById('name').value; //takes the value and stores in a variable

var email=document.getElementById('email').value;  

var password=document.getElementById('password').value;

var contact=document.getElementById('contact').value; //takes the value and stores in a variable

var addr=document.getElementById('addr').value;

var date=document.getElementById('date').value; //takes the value and stores in a variable

	error = "";
	nameErr = "";
	emailErr="";
	passErr = "";
	addrErr="";
	contactErr="";
	dateErr="";
	if (name == "" || name == null) 
	{
		nameError = "Please enter name";
		error = nameError;
	}
	/* Check if email is empty or invalid */

			/* Email validation with regular expresssion */
			if (email!=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
			{
				if(nameError == "" || nameError == null){
					error = error + "\n" + emailError;
				}else{
					emailError = "please enter a valid email";
		    		error = emailError;
				}
				
		    }
		    
		    			
    

    if(error!="")
    {
    	alert(error);
    }
    else{
    	alert("User has been added");
    }

}