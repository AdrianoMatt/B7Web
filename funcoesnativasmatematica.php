<?php
#valor absoluto de um numero
$numero = -8.4;
echo abs($numero);
echo "</br>";
echo pi();
echo "</br>";
#arredondamento de numero para baixo
$numero2 = 2.4;
echo floor($numero2);
#arredondamento de numero para cima
echo "</br>";
echo ceil($numero2);
#Em caso de arredondamento variável
echo "</br>";
echo round($numero2);
#Em caso de numero com mais de uma casa decimal
echo "</br>";
$numero3 = 12.428773;
echo round($numero3, 3);

?>