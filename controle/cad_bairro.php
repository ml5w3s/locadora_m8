<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Cadastro de bairro</h1>
<div class="flex-container">
<div id="box" class="barra">
<fieldset>
<?php
include ("conexao.php");
try{	
	$bairro = $_POST['bairro'];
	$sql = "INSERT INTO bairro(bairro) VALUES ('$bairro')";
	$conn->query($sql);
        echo "<h4>Bairro incluido com sucesso</h4>
		<h3><a href='/projeto_locadora'>Voltar</a></h3>";
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></div></div></body></html>
