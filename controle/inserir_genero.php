<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Cadastro de gênero</h1>
<div id="box">
<fieldset>
<?php
include ("conexao.php");
try{
	$genero = $_POST['genero'];
	$sql = "INSERT INTO genero(genero) VALUES ('$genero')";
	$conn->query($sql);
	echo "<h4>Genero inserido com sucesso<h4>
	  <h3><a href='/projeto_locadora'>Voltar</a></h3>";
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></div></body></html>
