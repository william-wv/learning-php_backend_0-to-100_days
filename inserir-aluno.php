<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

$student = new Student(
    NULL,
    "William' ,''); DROP TABLE alunos; -- Dias",
    new \DateTimeImmutable('2004-03-12')
);

//$sqlInsert = "INSERT INTO students (name , birth_date) VALUES ('{$student->name()}','{$student->birthDate()->format('Y-m-d')}');";
$sqlInsert = "INSERT INTO students (name , birth_date) VALUES (?,?);";

$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1, $student->name());
$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));


    if ($statement->execute()){
        echo "Aluno inserido com sucesso!";
    }
//var_dump($pdo->exec($sqlInsert));