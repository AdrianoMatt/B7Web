<?php
#Aula de Parâmetro: Referência ou Valor
function somar($n1, $n2, &$total){
    $total = $n1 + $n2;

}
$x = 3;
$y = 2;
$soma = 0;
somar($x, $y, $soma);
echo $x. ' + ' . $y. '=' . $soma;

echo "<hr>";
//listar de forma ordenada usando sort
$lista = [4, 9, 2];
sort($lista);
print_r($lista);
