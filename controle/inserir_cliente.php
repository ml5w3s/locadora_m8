<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Cadastro de cliente</h1>
<div id="box">
<fieldset>
<?php
include ("conexao.php");
try{
	$cliente = $_POST['cliente'];
	$bairro = $_POST['bairro']; 
	$cpf = $_POST['cpf'];
	$sql = "INSERT INTO cliente(cliente, bairro_cliente, cpf) VALUES ('$cliente', $bairro, '$cpf')";
	$conn->query($sql);
	echo "<h4>Cliente cadastrado com sucesso</h4>
		<h3><a href='/projeto_locadora'>Voltar</a></h3>";

}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></div></body></html>
