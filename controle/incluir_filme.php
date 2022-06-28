<?php
include ("conexao.php");
echo "<html><head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
echo "<body><h1><a href='/00_marcelo/projeto_locadora'>Voltar</a></h1></body></html> ";
try{
	$titulo = $_POST['titulo'];
	$genero = $_POST['genero']; 
	$produtora = $_POST['produtora'];
	$diretor = $_POST['diretor'];
	$sql = "INSERT INTO filme(titulo, genero_filme, produtora_filme, diretor_filme) 
			VALUES ('$titulo', $genero, $produtora, $diretor)";
	$conn->query($sql);
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
