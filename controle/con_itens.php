<?php
include ("conexao.php");
try{
	$sql = 'SELECT filme_locado, locacao, valor FROM itens_locacao';
	foreach ($conn->query($sql) as $row) {
	    print $row['filme_locado']." ";
		print $row['locacao']." ";
	    print $row['valor']."<br/>";
	}
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>