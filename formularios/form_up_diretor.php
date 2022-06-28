<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/estilo.css'>
</head>
<body>
<h1>Atualização de diretor</h1>
<div class="flex-container">
<div id="box" class="barra">
<form method="POST" action="../controle/update_diretor.php">
	<h3>Escolha o diretor a ser modificado</h3>
	<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM diretor';
  print "<select name='cod_diretor'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_diretor']."'>".$row['diretor']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
	<br><h3>Digite um novo nome para o diretor</h3><br>
	<input type="text" name="up_diretor">
	<input type="submit" value="Atualizar">
</form>
</div>
</div>
</body>
</html>