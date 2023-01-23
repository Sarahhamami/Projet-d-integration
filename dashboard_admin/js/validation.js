function Validate(input) {

	
  
	if (input.value.length!=8) {
        error.innerHTML("Invalid number!");
  
	  alert("Invalid number!");
  
	  document.form1.nc.focus();
  
	  return true;
  
	} else {
  
	
  
	  return false;
  
	}
  
  }
  
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }