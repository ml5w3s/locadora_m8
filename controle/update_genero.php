<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<h1>Atualização de gênero</h1>
<div class="flex-container">
<div id="box" class="barra">
<fieldset>
<?php
include ("conexao.php");
echo "<p>Gênero atualizado com sucesso!</p><a href='/00_marcelo/projeto_locadora'>Voltar</a>";
try{
	$cod_genero = $_POST['cod_genero'];	
	$up_genero = $_POST['up_genero'];
	$sql = "UPDATE genero set genero='$up_genero' WHERE cod_genero=$cod_genero";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></form></div></div></body></html>