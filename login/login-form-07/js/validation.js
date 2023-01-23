function Validate(input) {

	
  
	if (input.value.length!=8) {
  
	  alert("Invalid number!");
  
	  document.form1.nc.focus();
  
	  return true;
  
	} else {
  
	
  
	  return false;
  
	}
  
  }