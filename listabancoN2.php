<?php 
	include("conexaoN2.php");
	$dadosDoBanco = mostrarCadastrados();
	$dadosOrdenadosPeloSort = mostrarCadastradosSort();	
?>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<script type="text/javascript" src="query.maskedinput.js"></script>
<link rel="stylesheet" type="text/css" href="cssN2.css" media="screen"  />	
<script type="text/javascript" src="funcoesN2.js"></script>

<div class="tabela-centro">
		<table border="1">
				<thead>
					<h2>Tabela Pessoa</h2>
					<tr>				
											
						<th>Nome</th>		
					</tr>
				</thead>
				<tbody>

				<?php foreach ($dadosDoBanco as $pessoa) { ?>
					<tr>	
										
						<td><?=$pessoa["nome"]?></td>						
					</tr>
				<?php } ?>	

				</tbody>
		</table>
		<table border="1">
				<thead>
					<h2>Tabela Ordenada pelo Selection Sort</h2>
					<tr>															
						<th>Nome</th>		
					</tr>
				</thead>
				<tbody>

				<?php foreach ($dadosOrdenadosPeloSort as $pessoa) { ?>
					<tr>											
						<td><?=$pessoa["nome"]?></td>						
					</tr>
				<?php } ?>	

				</tbody>
		</table>
		<div>
				<input onclick="window.location.href = 'index.php'" type="button" class="botao3" name="botao" value="Cadastro" />
				<input onclick="window.location.href = 'indexprincipal.php'" type="button" class="botao3" name="botao" value="Menu" />
		</div>
</div>
