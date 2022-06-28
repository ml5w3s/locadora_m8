<?php
include ("conexao.php");
try{
    $sql="SELECT c.cliente, l.cod_locacao, i.filme_locado, f.titulo, g.genero, b.bairro FROM cliente c 
          INNER JOIN locacao l ON c.cod_cliente = l.cliente_locacao 
          INNER JOIN itens_locacao i ON l.cod_locacao=i.locacao 
          INNER JOIN filme f ON i.filme_locado=f.cod_filme
          INNER JOIN bairro b ON b.cod_bairro=c.bairro_cliente
          INNER JOIN genero g ON g.cod_genero=f.genero_filme ORDER BY l.cod_locacao";
    print "<table border='1'>";
    foreach($conn->query($sql) as $row){
        print "<tr><td>".$row['cliente']."</td>
                   <td>".$row['cod_locacao']."</td>
                   <td>".$row['filme_locado']."</td>
                   <td>".$row['bairro']."</td>
                   <td>".$row['genero']."</td>                   
                   <td>".$row['titulo']."</td></tr>";
    }
    print "</table>";
}
catch(PDOException $ex){
    echo 'Erro'.$ex->getMessage();
}
?>