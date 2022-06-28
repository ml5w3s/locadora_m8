<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Filmes</h1>
<div class="flex-container">
<div id="box">
<fieldset>	
<?php
include ("conexao.php");
echo "<a href='../consultas/con_locacao.php'>Selecione os Filmes</a>";
try{
	$cliente = $_POST['cliente'];
	str_replace("/", "-", $_POST["data1"]);
	$data_loc = $_POST['data_loc'];
	//$data_loc=date($data_loc);
	$sql = "INSERT INTO locacao(cliente_locacao,data_locacao)
			VALUES ($cliente, '$data_loc')";
	$conn->query($sql);
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></div></div></body></html>
