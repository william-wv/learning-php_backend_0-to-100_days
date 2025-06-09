<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;
use \Alura\Pdo\Infra\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepo = new PdoStudentRepository($connection);

// processos de def da turma

$connection->beginTransaction();

$aStudent = new Student(30,'Will', new DateTimeImmutable('2000-01-01'));
$studentRepo->save($aStudent);

$bStudent = new Student(31,'flavi', new DateTimeImmutable('2000-01-01'));
$studentRepo->save($bStudent);

// inserir alunos
//$connection->commit();
$connection->rollBack();