
<?php 
	include("conexaoN2.php");
	
	$dadosDoBanco = mostrarCadastrados();
	/*
	$dadosOrdenadosPeloSort = mostrarCadastradosSort(); */	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="cssN2.css" media="screen" />
		<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="query.maskedinput.js"></script>
		<script type="text/javascript" src="funcoes.js"></script>
				
		<h1>Trabalho N2</h1>
		<h2>Pesquisa e Armazenamento de Dados</h2>
		<meta charset="utf-8">
		<title>Trabalho N2</title>
	</head>
	<body style="font-family: helvetica">	
		<div class="menu3">
			<form name="cadastropessoa" action="listabancoN2.php" method="post" onsubmit="validarCadastro()">
					<input type="text" name="nome" id ="nome" maxlength="100"  placeholder = " Insira um nome..."  />							
					<input type="hidden" name="acao" value="inserir" />
					<input class="botao" type="submit" onsubmit=validarCadastro() name="botao" value="Cadastrar">
					<?php if(count($dadosDoBanco) > 0) { ?>
						<input class="botao" onclick="window.location.href = 'listabancoN2.php'" style="text-align:center" class="botao2" name="botao" value="Listar" />
					<?php } ?>						
			</form>
		</div>
	</body>
	
</html>
