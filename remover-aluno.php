<?php

require_once 'vendor/autoload.php';
use Alura\Pdo\Infra\Persistence\ConnectionCreator;

$pdo = ConnectionCreator::createConnection();


$sqlDelete = 'DELETE FROM students WHERE id = ?';
$statement = $pdo->prepare($sqlDelete);
$statement->bindValue(1,2, PDO::PARAM_INT);
var_dump($statement->execute());
