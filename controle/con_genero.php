<?php
include ("conexao.php");
try{
	$sql = 'SELECT f.titulo, g.genero, p.produtora FROM filme f INNER JOIN genero g ON u.cod_uf = c.cod_uf INNER JOIN genero g ON u.cod_uf = c.cod_uf;';
	foreach ($conn->query($sql) as $row) {
	print $row['cod_filme']." ".
        print $row['titulo']." ".
        print $row['genero_filme']." ".
        print $row['produtora_filme']."<br/>";
	}
}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>