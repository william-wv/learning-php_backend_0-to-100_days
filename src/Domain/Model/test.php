<?php


use Alura\Pdo\Infra\Repository\PdoStudentRepository;

$pdo = new PDO('...');
$repository = new PdoStudentRepository($pdo);

empty($repository->allStudents());