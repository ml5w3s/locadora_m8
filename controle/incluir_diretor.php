<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Cadastro de bairro</h1>
<div id="box" class="barra">
<?php
include ("conexao.php");
echo "<h4>Diretor incluido com sucesso</h4>
	  <h3><a href='/00_marcelo/projeto_locadora'>Voltar</a></h3>";
try{	  
	$diretor = $_POST['diretor'];
	$sql = "INSERT INTO diretor(diretor) VALUES ('$diretor')";
	$conn->query($sql);
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}	
?>
</div></body></html>