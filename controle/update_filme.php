<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/Geral.css'>
</head>
<body>
<h1>Atualização de Filme</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include ("conexao.php");
echo "<p>Filme atualizado com sucesso!</p><a href='/00_marcelo/projeto_locadora'>Voltar</a>";
try{
	$sql = "UPDATE bairro set bairro='$up_bairro' WHERE cod_bairro=$cod_bairro";
	$conn->query($sql);
	echo 'Filme atualizado com sucesso';

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></form></div></div></body></html>