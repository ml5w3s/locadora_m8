<?php
include ("conexao.php");
try{
	$sql = 'SELECT cod_produtora, produtora FROM produtora';
	foreach ($conn->query($sql) as $row) {
	    print $row['cod_produtora']." ";
	    print $row['produtora']."<br/>";
	}
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>