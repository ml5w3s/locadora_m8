<?php
include ("conexao.php");
try{
$sql = 'SELECT f.titulo, g.genero, p.produtora FROM filme f INNER JOIN genero g ON f.genero_filme = g.cod_genero INNER JOIN produtora p ON f.produtora_filme=p.cod_produtora;';
foreach ($conn->query($sql) as $row) {
	print $row['f.titulo']." ";
	print $row['g.genero']." ";
	print $row['p.produtora']."<br/>";
}
}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>