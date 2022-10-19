<?php
$j = '';
for ($i = 0; $i<=20; $i++){
        echo $j . '</br>';
         $j.='-';
        ;
}
echo '</br>';

#Outra forma que podia ser feita
for ($i=0; $i<=20; $i++){
    for($j=1; $j<=$i; $j++){
        echo "-";
    };
    echo "<br/>";
}