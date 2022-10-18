<?php
#$numero = 0;
#while ($numero < 10){
#echo "N: " . $numero . "</br>";
#$numero += 1;
#}
#Se observar verá que o mesmo código que foi utilizado acima esta simplificado no for abaixo:

for($numero = 0; $numero < 10; $numero += 1) {
    echo "N: " . $numero . "</br>";
}
echo "</br>";

for ($i=0; $i<=10;$i++){
    echo "N: " . $i . "</br>";
}