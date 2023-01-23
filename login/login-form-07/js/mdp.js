function validatemdp(form) { 
    var msg; 
    var str = form.password.value; 
    if (str.match( /[0-9]/g) && 
            str.match( /[A-Z]/g) && 
            str.match(/[a-z]/g) && 
            str.match( /[^a-zA-Z\d]/g) &&
            str.length >= 10) 
        return true ; 
    else 
        alert("Mot de passe faible.</p>"); 
    
}

function Validate(form) {

	
  
	if (form.nc.value.length!=8) {
  
	  alert("Invalid number!");
  
	   
  
	  return true;
  
	} else {
  
	
  
	  return false;
  
	}
  
  }
  function ValidateTEL(form) {

	
  
	if (form.num_tel.value.length!=8) {
  
	  alert("Invalid number!");
  
	   
  
	  return true;
  
	} else {
  
	
  
	  return false;
  
	}
  
  }

function checkPw(form) {
    pw1 = form.password.value;
    pw2 = form.password1.value;
    
    if (pw1 != pw2) {
    alert ("erreur: les mots de passes ne correspondent pas")
     
    }
    else return true;
    }


    function countCheckedPureJS(){
        var elements = document.getElementsByClassName("control control--checkbox mb-0"),
            i,
            count = 0;
        for (i = 0; i < elements.length; i++){
            if (elements[i].checked){
                count++;
            }
        }
        if (count>1){
            alert("choisir seulement 1 ");

        }
       
        return count;
    }