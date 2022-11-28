<?php
#Aula de Parâmetro: Referência ou Valor
function somar($n1, $n2){
    $total = $n1 + $n2;
    return $total;
}
$x = 3;
$x = 2;
$soma = somar($x, $y);
echo "O total é: ". $soma;
