<?php

require './src/model/Filme.php';

echo "Bem vindo(a) ao Screen Match \n";

$filme = new Filme();
// $filme->nome = 'Thor - Ragnarok';
// $filme->anoLancamento = '2021';
// $filme->genero = 'super-heroi';

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7);
$filme->avalia(8);

var_dump($filme);

echo $filme->media() . '\n';