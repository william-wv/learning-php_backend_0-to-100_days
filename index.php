<?php
require __DIR__ . '/src/model/Genero.php';
require __DIR__ . '/src/model/Titulo.php';
require __DIR__ . '/src/model/Serie.php';
require __DIR__ . '/src/model/Filme.php';
require __DIR__ . '/src/Func/Calculadora.php';

echo "Bem vindo(a) ao Screen Match \n";

$filme = new Filme('Thor', 2021, Genero::SuperHeroi,180);
// $filme->nome = 'Thor - Ragnarok';
// $filme->anoLancamento = '2021';
// $filme->genero = 'super-heroi';

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7);
$filme->avalia(8);

var_dump($filme);

echo $filme->media() . "\n";

$calculadora = new Calculadora;
$calculadora->inclui($filme);
$duracao = $calculadora->duracao();

echo "Para esta maratona você precisa de ". $duracao . "minutos";
