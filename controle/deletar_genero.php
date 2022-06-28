<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Exclusão de Gênero</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include ("conexao.php");
echo "<h4>Gênero excluído com sucesso</h4>
	  <h3><a href='/00_marcelo/projeto_locadora'>Voltar</a></h3>";
try{
  $cod_genero = $_POST['cod_genero'];    
  $sql = "DELETE FROM genero WHERE cod_genero='$cod_genero'";
  $conn->query($sql);
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</form></fieldset></div></div></body></html>