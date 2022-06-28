<?php
include ("conexao.php");
try{	
	$cod_bairro = $_POST['cod_bairro'];
	$sql = "DELETE FROM bairro WHERE cod_bairro=$cod_bairro";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>