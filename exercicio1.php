<?php
$lista = [
'nome' => 'Adriano',
'idade' => 24,
'atributos' => [
'forca' =>80,
'agilidade' => 60,
'destreza' => 50,
],
'vida' => 1000,
'mana' => 928
];
echo "NOME: " . $lista['nome'].
"<br>FORÇA: " . $lista['atributos']['forca'] .
"<br>VIDA: " . $lista['vida'];

#esse foi tenso nao consegui fazer direito...