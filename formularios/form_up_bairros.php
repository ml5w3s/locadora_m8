<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
    <link rel="stylesheet" type="text/css" href="../estilos/estilo.css">
</head>
<body>
    <h1>Atualização de bairro</h1>
    <div id="box" class="barra">
    <form method="POST" action="../controle/update_bairro.php">
        <label>Escolha o bairro a ser alterado:</label>
<?php
include ("conexao.php");
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
        <label>Digite um novo nome para o bairro: </label>
        <input type="text" name="up_bairro"><br><br>
		<input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>