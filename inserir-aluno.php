<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

$student = new Student(NULL,'William', new \DateTimeImmutable('2004-03-12'));

$sqlInsert = "INSERT INTO students (name , birth_date) VALUES ('{$student->name()}','{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));