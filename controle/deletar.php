<?php
include ("conexao.php");
try{
	$sql = 'SELECT nome, celular FROM contatos';
	foreach ($conn->query($sql) as $row) {
	    print $row['nome']." ";
	    print $row['celular']."<br/>";
	}
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
