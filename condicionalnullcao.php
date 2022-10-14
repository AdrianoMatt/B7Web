<?php
$nome = 'Adriano ';
$sobrenome = 'Matt';

$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
echo $nomeCompleto;
