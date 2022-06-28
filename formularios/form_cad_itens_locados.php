<?php

echo '<input type="checkbox" name="'. $carro[$i]['nome_carac'] . '" value="' . $carro[$i]['nome_carac'] . '">' . $carro[$i]['nome_carac'] . '<br>';

$carro = [
    ['id' => 1, 'nome' => "Meriva"],
    ['id' => 2, 'nome' => "Mustangue"],
    ['id' => 3, 'nome' => "Maverick"],
    ['id' => 4, 'nome' => "Motor Home"],
];

foreach ($carro as $key => $value) {
    echo "<label><input type="checkbox" name="'. $carro[$i]['nome'] . '" value="' . $carro[$i]['nome'] . '">' . $carro[$i]['nome'] . '<br></label>";
}

/*echo "<input type='checkbox' (click)='check(i)' [checked]='row.checked === true'>";

try{
    $nome=$_POST['cfilme'];
    $sql="SELECT * FROM filme WHERE titulo LIKE '%$nome%' ORDER BY titulo";
    print "<form method='post' action='../controle/incluir_itens.php'>";
    foreach($conn->query($sql) as $row){
        print "<tr><td><input name='item' type='radio' value='".$row['cod_filme']."'>".$row['titulo']."</td></tr>";
    }
    echo "<input type='submit' value='Incluir item'></form></table>";
}catch(PDOException $ex){
    echo 'Erro'.$ex->getMessage();
}*/
?>

