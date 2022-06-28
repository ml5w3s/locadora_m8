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
<form method="POST" action="../controle/update_produtora.php">
	<h3>Escolha o produtora a ser modificado</h3>
	<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM produtora';
  print "<select name='cod_produtora'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_produtora']."'>".$row['produtora']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
	<br><h3>Digite um novo nome para o produtora</h3><br>
	<input type="text" name="up_produtora">
	<input type="submit" value="Atualizar">
</fieldset></form></div></div></body></html>