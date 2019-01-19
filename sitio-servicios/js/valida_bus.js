with(document.form){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && txtBuscar.value==""){
			ok=false;
			alert("Debe escribir algún servicio");
			txtUsu.focus();
		}
		
		if(ok){ submit(); }
	}
}
