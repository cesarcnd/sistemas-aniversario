	function deletePaste(e){ 
    	return !(e.keyCode==86 && e.ctrlKey);
	}
	function isLetter(text){
	  var charCode;
		if (navigator.appName == "Netscape"){
			charCode = text.which;
		}else{
			charCode = text.keyCode;
		} 
		var inp = String.fromCharCode(charCode);
		if(/[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ ]/.test(inp) || text.keyCode==8 || (text.keyCode>=37&&text.keyCode<=40)){
			return true;
		}else{
			return false;
		}
	}
	function isNumeric(number){
		var charCode;
		if (navigator.appName == "Netscape"){
			charCode = number.which;
		}else{
			charCode = number.keyCode;
		} 
		if((charCode<48||charCode>57)&&charCode!=13&&charCode!=8&&charCode!=0){
			
			return false;
		}else{
			return true;
		}
	}
	