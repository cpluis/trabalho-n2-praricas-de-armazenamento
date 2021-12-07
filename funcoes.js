function validarCadastro(){
			
	if(document.getElementById("nome").value == ""){
		alert("Campo nome deve ser preenchido");
		return false;
	}
	else{
		window.location.href = 'listabancoN2.php';
	}
	// return true;
}

