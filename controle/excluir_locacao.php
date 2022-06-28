<?php
include ("conexao.php");
try{	
	$cod_locacao = $_POST['cod_locacao'];
	$sql = "DELETE FROM locacao WHERE cod_locacao=$cod_locacao";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>