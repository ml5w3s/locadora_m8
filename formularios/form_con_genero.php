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
<h1>Filmes por gênero</h1>    
<div class="flex-container">
<div id="box">
<?php
include ("../controle/conexao.php");
try{
$sql = 'SELECT filme.titulo, genero.genero FROM filme
    INNER JOIN genero ON filme.genero_filme = genero.cod_genero
    ORDER BY genero.genero';
print "<table border='1'><tr><th>Gênero</th><th>Título</th></tr>";
foreach ($conn->query($sql) as $row) {
    print "<tr><td>".$row['genero']."</td><td>".$row['titulo']."</td></tr>";
}
print "</table><a href='http://localhost/00_marcelo/projeto_locadora'>Voltar</a>";
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</div></div></body></html>