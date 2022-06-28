<?php
include ("conexao.php");
try{
	$sql = 'SELECT cod_cliente, cliente, cpf, bairro_cliente FROM cliente';
	foreach ($conn->query($sql) as $row) {
	    print $row['cod_cliente']." ";
	    print $row['cliente']." ";
		print $row['cpf']." ";			
	    print $row['bairro_cliente']."<br/>";
	}
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>