<?php
$idade = 18;
#if ($idade >= 18) {
#    echo "Maior de idade";
#}
#else { 
#    echo "Menor de idade";
#};


#Outra forma de realizar usando condicional ternária
#echo ($idade <18) ? 'Menor de idade' : 'Maior de idade';
#echo '</br>';

#Mais uma forma de utilizar operador ternário
$menorDeIdade = ($idade < 18) ? true : false;
if($menorDeIdade) {
    echo 'Menor de idade';
} else {
    echo 'Maior de idade';
}
