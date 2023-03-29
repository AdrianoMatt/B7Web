<?php
#strpos serve para localizar a posição que inicia a condição 
$nomeCompleto = 'adriano matt';
$posicao = strpos($nomeCompleto, 'r');
echo $posicao;
echo "<br>";
if($posicao>=0){
    echo "ACHOU";
    } else {
echo "NÃO ACHOU";
    }
    echo "<br>";
#Para deixar a primeira letra da string em maiúscula
echo ucfirst($nomeCompleto);
echo "<br>";
#Para deixar todas as primeiras letras da string em maiúscula
echo ucwords($nomeCompleto);











