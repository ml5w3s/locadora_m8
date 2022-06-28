<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Cadastro de filmes</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/inserir_filme.php">
  <label>Titulo:</label>
  <input type="text" value="" name="titulo" required="required">
  <label>Genero:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM genero ORDER BY genero';
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
  $sql = 'SELECT * FROM produtora ORDER BY produtora';
  print "<select name='produtora'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_produtora']."'>".$row['produtora']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
  <label>Ator:</label>
<?php
try{
  $sql = 'SELECT * FROM ator ORDER BY ator';
  print "<select name='ator'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_ator']."'>".$row['ator']."</option>";
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
  $sql = 'SELECT * FROM diretor ORDER BY diretor';
  print "<select name='diretor'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_diretor']."'>".$row['diretor']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
  <label>Valor:</label>
  <input type="text" name="valor"></br></br>
  <nav class="botoes"><input type="submit" value="Cadastrar"></nav>
</fieldset></form></div></div></body></html>
