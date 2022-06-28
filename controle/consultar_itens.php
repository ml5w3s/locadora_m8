<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<h1>Recido de locacoes</h1>
<div class="flex-container">
<div id="recibox" >
<fieldset>
<?php
echo "<small>Vídeo Locadora - data: ".date('d/m/y')." - hora: ".date('H:i')."</small>";
?>
<table class="tabrecibo"><tr><th>Filme</th><th>Valor R$</th></tr>	
<?php
include ("conexao.php");
try{
	$locacao=$_POST['locacao'];
	$total=0.0;
	$sql = "SELECT c.cliente, l.cod_locacao, i.filme_locado, f.titulo, f.valor FROM cliente c 
	INNER JOIN locacao l ON c.cod_cliente=l.cliente_locacao 
	INNER JOIN itens_locacao i ON l.cod_locacao=i.locacao 
	INNER JOIN filme f ON i.filme_locado=f.cod_filme 
	WHERE locacao LIKE '$locacao'";
	foreach ($conn->query($sql) as $row) {
	   print "<tr class='linharecibo'><td>".$row['titulo']."</td><td class='valores'>".number_format($row['valor'],2,",",".")."</td></tr>";
		$total += $row['valor'];
	}
	print "<h3>RECIBO NÚMERO <u>".$row['cod_locacao']."</u></h3><h4>Cliente :<u>".$row['cliente'].
			"</u> Total R$: <u><b>".number_format($total,2,",",".")."</b></u></h4><h3>Títulos selecionados:</h3></table><br>
			<a href='http://localhost/projeto_locadora'>Voltar</a>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fildset></div></div></body></html>
