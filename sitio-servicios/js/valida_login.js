with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && txtUsu.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			txtUsu.focus();
		}
		if(ok && txtCon.value==""){
			ok=false;
			alert("Debe escribir su contraseña");
			txtCon.focus();
		}
		if(ok){ submit(); }
	}
}
