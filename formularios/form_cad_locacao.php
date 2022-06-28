<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">     
</head>
<body>
<h1>Locação de filmes</h1>
<div class="flex-container">
<div id="box">  
<fieldset>
<form method="POST" role="form" enctype=multipart/form-data action="../controle/inserir_locacao.php">
  <label>Cliente:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM cliente';
  print "<select name='cliente'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value=".$row['cod_cliente'].">".$row['cliente']." - ".$row['cpf']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?><br>
  <br><label>Data de locação: </label>
  <input type="date" name="data_loc">
  <nav class="botoes"><input type="submit" value="Cadastrar"></nav>
</form></fieldset></div></div></body></html>
