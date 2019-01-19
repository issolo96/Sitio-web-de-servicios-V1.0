with(document.form){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && txtNombre.value==""){
			ok=false;
			alert("Faltan campos por llenar");
			txtUsu.focus();
		}
		if(ok && txtApll.value==""){
			ok=false;
			alert("Faltan campos por llenar");
			txtCon.focus();
		}
		if(ok && txtEdad.value==""){
			ok=false;
			alert("Faltan campos por llenar");
			txtCon.focus();
		}
		if(ok && txtOficio.value==""){
			ok=false;
			alert("Faltan campos por llenar");
			txtCon.focus();
		}
		if(ok && txtApll.value==""){
			ok=false;
			alert("Faltan campos por llenar");
			txtCon.focus();
		}
		if(ok && txtTel.value==""){
			ok=false;
			alert("Faltan campos por llenar");
			txtCon.focus();
		}
		if(ok){ submit(); }
	}
}