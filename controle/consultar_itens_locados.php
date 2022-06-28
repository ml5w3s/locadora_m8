<?php
include ("conexao.php");
try{
    $sql="SELECT c.cliente, l.cod_locacao, i.filme_locado, f.titulo FROM cliente c 
          INNER JOIN locacao l ON c.cod_cliente = l.cliente_locacao 
          INNER JOIN itens_locacao i ON l.cod_locacao=i.locacao 
          INNER JOIN filme f ON i.filme_locado=f.cod_filme ORDER BY l.cod_locacao";
    print "<table border='1'>";
    foreach($conn->query($sql) as $row){
        print "<tr><td>".$row['cliente']."</td>
                   <td>".$row['cod_locacao']."</td>
                   <td>".$row['filme_locado']."</td>
                   <td>".$row['titulo']."</td></tr>";
    }
    print "</table>";
}
catch(PDOException $ex){
    echo 'Erro'.$ex->getMessage();
}
?>