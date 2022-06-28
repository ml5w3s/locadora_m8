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
<h1>Atualização de produtora</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include ("conexao.php");
echo "<p>Produtora atualizado com sucesso!</p><a href='/00_marcelo/projeto_locadora'>Voltar</a>";
try{
	$cod_produtora = $_POST['cod_produtora'];	
	$up_produtora = $_POST['up_produtora'];
	$sql = "UPDATE produtora set produtora='$up_produtora' WHERE cod_produtora=$cod_produtora";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></form></div></div></body></html>