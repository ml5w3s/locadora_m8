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
<div id="box">
<fieldset>
<?php
include ("conexao.php");
echo "<h4>Bairro incluido com sucesso</h4>
	  <h3><a href='/00_marcelo/projeto_locadora'>Voltar</a></h3>";
try{	
	$cod_bairro = $_POST['cod_bairro'];
	$sql = "DELETE FROM bairro WHERE cod_bairro='$cod_bairro'";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</form></fieldset></div></div></body></html>