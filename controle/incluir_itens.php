<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Escolha a opção desejada</h1>
<div class="flex-container">
<div id="box">
<fieldset>    
<?php
include("conexao.php");
try{
    $item=$_POST['item'];
    $sql = "SELECT cod_locacao FROM locacao ORDER BY cod_locacao DESC LIMIT 1";
    foreach($conn->query($sql) as $row){
        $codloc = $row['cod_locacao'];
    }
    $sql="INSERT INTO itens_locacao(filme_locado,locacao) 
         VALUES ('$item','$codloc')";
    $conn->query($sql);
	echo "<a href='../consultas/con_locacao.php'>Selecionar outro filme</a><br><br>
	 <a href='../formularios/form_finalizar_locacao.php'>Finalizar seleção</a>";
}catch(PDOException $ex){
    echo 'Erro'.$ex->getMessage();
}
?>
</fieldset></div></div></body></html>
