<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<h1>Média de locacoes por bairro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/deletar_bairro.php">
    <label>Selecione o bairro desejado:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM bairro';
  print "<select name='cod_bairro'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_bairro']."'>".$row['bairro']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>    
</br></br>
  <input type="submit" value="Excluir">
</form></fieldset></div></div></body></html>