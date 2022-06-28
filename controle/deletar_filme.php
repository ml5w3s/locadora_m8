<?php
include ("conexao.php");
echo "<html><head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
echo "<body><h1><a href='/00_marcelo/projeto_locadora'>Voltar</a></h1></body></html> ";
try{	
	$cod_filme = $_POST['cod_filme'];
	$sql = "DELETE FROM filme WHERE cod_filme='$cod_filme'";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>