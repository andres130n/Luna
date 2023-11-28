with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && claveAcceso.value==""){
			ok=false;
			alert("Debe escribir un valor valido para ser consultado.");
			claveAcceso.focus();
		}
		if(ok){ submit(); }
	}
}
