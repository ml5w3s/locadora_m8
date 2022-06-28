<?php
include ("../controle/conexao.php");
try{
    $sql="SELECT COUNT(filme_locado) FROM itens_locacao;";
    print "<html><body bgcolor='#3377aa'><table border='1'><tr><th>";
    $conn->query($sql);
    print $sql;
    print "</th></tr></body></html>";
}
catch(PDOException $ex){
    echo 'Erro'.$ex->getMessage();
}
?>