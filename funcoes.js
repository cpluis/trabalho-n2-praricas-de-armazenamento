function validarCadastro(){
			
	if(document.getElementById("nome").value == ""){
		alert("Campo nome deve ser preenchido");
		return false;
	}return true;
}
