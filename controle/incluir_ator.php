<?php
include ("conexao.php");
	$ator = $_POST['ator'];
	$sql = "INSERT INTO ator(ator) VALUES ('$ator')";
	$conn->query($sql);
?>