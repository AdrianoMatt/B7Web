<?php
$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

#foreach ($ingredientes as $ingrediente) {
#echo 'Item: '. $ingrediente . "</br>";
#}
#Outra forma de utilizar o foreach para numerar os ingredientes:
    echo '<h2>Ingredientes</h2>';
    echo '<ul>';
    
    #foreach ($ingredientes as $chave => $valor){
    #echo "Item " . ($chave + 1) . ": " . $valor . '</br>';

    foreach ($ingredientes as $valor){
        echo '<li>' . $valor . '</li>';
 }   
 echo '</ul>';