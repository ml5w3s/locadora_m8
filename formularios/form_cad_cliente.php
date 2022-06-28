<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Cadastro de clientes</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/inserir_cliente.php">
  <label>Nome:</label>
  <input type="text" value="" name="cliente" required="required"></br></br>
  <label>Bairro:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM bairro';
  print "<select name='bairro'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_bairro']."'>".$row['bairro']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?></br></br>
  <label>CPF: </label>
  <input type="text" name="cpf">
  <nav class="botoes"><input type="submit" value="Cadastrar"></nav>
</fieldset></form></div></div></body></html>