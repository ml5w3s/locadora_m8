<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Cadastro de filme</h1>
<div id="box" class="barra">
<?php
include ("conexao.php");
try{
	$titulo = $_POST['titulo'];
	$ator = $_POST['ator'];
	$diretor = $_POST['diretor'];
	$genero = $_POST['genero']; 
	$produtora = $_POST['produtora'];
	$valor = $_POST['valor'];
	$sql = "INSERT INTO filme(titulo, ator_filme, diretor_filme, genero_filme, produtora_filme, valor) 
	        VALUES ('$titulo', $ator, $diretor, $genero, '$produtora', '$valor')";
	$conn->query($sql);
	echo "<h4>Filme incluido com sucesso</h4><h3><a href='/projeto_locadora'>Voltar</a></h3>";
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</div></body></html>
