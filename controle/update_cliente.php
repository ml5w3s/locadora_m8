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
<h1>Atualização de cliente</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include ("conexao.php");
echo "<p>Cliente atualizado com sucesso!</p><a href='/00_marcelo/projeto_locadora'>Voltar</a>";
try{
	$cod_cliente = $_POST['cod_cliente'];	
	$up_cliente = $_POST['up_cliente'];
	$sql = "UPDATE cliente set cliente='$up_cliente' WHERE cod_cliente=$cod_cliente";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></form></div></div></body></html>