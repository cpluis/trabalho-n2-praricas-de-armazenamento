<?php

if (isset($_POST["acao"])){

    if ($_POST["acao"]=="inserir"){
       
        inserirPessoa();
        voltarListaBanco();
    }
}

function abrirBanco(){

$mysqli = mysqli_connect("localhost", "root", "", "cadastropessoa");
 
if (!$mysqli) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
 return $mysqli;
}


function inserirPessoa(){	
 $sql = "INSERT INTO pessoa(nome) VALUES ('{$_POST["nome"]}')";
 abrirBanco()->query($sql);	
}

function mostrarCadastrados(){
	$grupo = array();
	$grupo2 = array();
	$grupo3 = array();
	$banco = abrirBanco();

	$sql = "SELECT nome FROM pessoa ";
	$resultado = $banco -> query($sql);		
	while ($row = mysqli_fetch_array($resultado)) {
		
		$grupo2 [] = $row;			
}
	return $grupo2;
}

function mostrarCadastradosSort(){
	$banco = abrirBanco();	
	$sql = "SELECT nome FROM pessoa ";	
	$resultado = $banco -> query($sql);
				
	while ($row = mysqli_fetch_array($resultado)) {		
		$grupo2 [] = $row;			
}

$grupo3 = array_reverse($grupo2); 	
$grupo4 = selectionSort($grupo3);

	return $grupo4;
}

function selectionSort($data)
{
    $n=count($data);
    $nextSwap=null;     
    $temp=null;
 
    for($i=0; $i<$n-1; $i++)
    {
 
        $nextSwap=$i;
        for($j=$i+1; $j<$n; $j++)
        {
            if( $data[$j]<$data[$nextSwap] ) 
            {
                $nextSwap=$j; 
            }
        }         
        $temp=$data[$i];
        $data[$i]=$data[$nextSwap];
        $data[$nextSwap]=$temp;
    }
    return $data;
}









///=====================
function selection_sort($data)
{
	
for($i=0; $i<count($data)-1; $i++) {
	$min = $i;
	for($j=$i+3; $j<count($data); $j++) {
		if ($data[$j]<$data[$min]) {
			$min = $j;
		}
	}
   // $data = swap_positions($data, $i, $min);
}
return $data;
}



////==========

function voltarListaBanco(){
    header("Location:listabancoN2.php");
}

?>