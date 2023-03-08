<?php 
function calcula_obesidade($peso, $altura){
    return $peso / ($altura * $altura);
}
echo calcula_obesidade(70, 1.85)."<br>";

$total = 0;

echo "<br>Variavel Global - Não é uma boa pratica mas existe<br>";
function k2m2mi($quilometros){
    global $total;
    $total += $quilometros;
    return $quilometros * 0.6;
}
echo 'percorreu' . k2m2mi(100) . "Milhas<br>";
echo 'percorreu' . k2m2mi(200) . "Milhas<br>";
echo 'percorreu no total' . $total . "quilometros<br>";

echo "<br>Passagem de parâmetros<br>";
function Incrementa($variavel, $valor){
    $variavel += $valor;
}
$a = 10;
Incrementa($a, 20);
echo $a;
?>

