<?php
$dizimo = function (int $valor){
    return $valor * 0.1;
};
#A seguir estarei ocultando a função dentro de outra

$funcao = $dizimo;

echo $funcao(90);

?>