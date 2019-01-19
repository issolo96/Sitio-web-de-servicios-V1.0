with(document.form){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && txtUsuario.value==""){
			ok=false;
			alert("Faltan campos por llenar");
			txtUsu.focus();
		}
		if(ok && txtApll.value==""){
			ok=false;
			alert("Faltan campos por llenar");
			txtCon.focus();
		}
		if(ok && txtDir.value==""){
			ok=false;
			alert("Faltan campos por llenar");
			txtCon.focus();
		}
		if(ok && txtCon.value==""){
			ok=false;
			alert("Faltan campos por llenar");
			txtCon.focus();
		}
		
		if(ok){ submit(); }
	}
}