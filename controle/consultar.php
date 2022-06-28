<?php
include ("conexao.php");
try{
	$sql = 'SELECT * FROM bairro';
	print "<select>";
	foreach ($conn->query($sql) as $row) {
	    print "<option value=".$row['cod_bairro'].">".$row['bairro']."</option>";
	}
	print "</select>";
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
