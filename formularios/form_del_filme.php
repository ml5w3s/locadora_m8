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
<form method="POST" action="../controle/deletar_filme.php">
    <label>Selecione o filme para Exclusão:</label>
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
?>
    <input type="submit" value="Excluir">
  </form></fieldset></div></div></body></html>