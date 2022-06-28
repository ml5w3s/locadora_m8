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
<h1>Atualização de bairro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/update_filme.php">
	<h3>Selecione o filme a ser modificado</h3>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM filme ORDER BY titulo';
  print "<select name='cod_filme'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_filme']."'>".$row['titulo']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?><br><br>
<label>Escolha um novo título para o filme:</label>
<input type="text" name="titulo"><br><br>

    <label>Genero:</label>
<?php
try{
  $sql = 'SELECT * FROM genero';
  print "<select name='genero'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_genero']."'>".$row['genero']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?><br><br>

    <label>Produtora:</label>
<?php
try{
  $sql = 'SELECT * FROM produtora';
  print "<select name='produtora'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_produtora']."'>".$row['produtora']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?><br><br>

    <label>Diretor:</label>
<?php
try{
  $sql = 'SELECT * FROM diretor';
  print "<select name='diretor'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_diretor']."'>".$row['diretor']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?><br><br>
<label>Difite o valor do filme:</label>
<input type="text" name="valor"><br><br>
<input type="submit" value="Atualizar">
</fieldset></form></div></div></body></html>