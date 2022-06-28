<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Cadastro de usuário</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $sql = "INSERT INTO cadastro_user(usuario, senha) VALUES ('$usuario',$senha)";
    $conn->query($sql);
    echo "<h4>Cliente cadastrado com sucesso</h4><h1><a href='/00_marcelo/projeto_locadora'>Voltar</a></h1>";
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></div></div></body></html>