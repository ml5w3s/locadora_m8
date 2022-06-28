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
<h1>Atualização de genero</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/update_genero.php">
	<h3>Escolha o genero a ser modificado</h3>
	<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM genero ORDER BY genero';
  print "<select name='cod_genero'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_genero']."'>".$row['genero']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
	<br><h3>Digite um novo nome para o genero</h3><br>
	<input type="text" name="up_genero">
	<input type="submit" value="Atualizar">
</form></div></div></body></html>