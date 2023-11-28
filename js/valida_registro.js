with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && ciruc.value==""){
			ok=false;
			alert("Debe escribir una identificación de Identidad");
			ciruc.focus();
		}
		if(ok && username.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			username.focus();
		}
		if(ok &&fullname.value==""){
			ok=false;
			alert("Debe escribir su nombre");
			fullname.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Debe escribir su email");
			email.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su credencial");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de credencial");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Las credenciales no coinciden");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}
