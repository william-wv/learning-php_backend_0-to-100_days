<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;
require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new Student(
    NULL,
    "Flavia Vitoria",
    new \DateTimeImmutable('2005-10-15')
);

//$sqlInsert = "INSERT INTO students (name , birth_date) VALUES ('{$student->name()}','{$student->birthDate()->format('Y-m-d')}');";
$sqlInsert = "INSERT INTO students (name , birth_date) VALUES (:name, :birth_date);";

$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1, $student->name());
$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));


    if ($statement->execute()){
        echo "Aluno inserido com sucesso!";
    }
//var_dump($pdo->exec($sqlInsert));