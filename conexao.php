<?php

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

echo 'Conectei';

$pdo->exec('CREATE TABLE students (id PRIMARY KEY ,name TEXT, birth_date TEXT);');