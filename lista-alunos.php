<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';


$pdo = ConnectionCreator::createConnection();

$statement = $pdo->query('SELECT * FROM students;');

//fetchObject  para quando o contrrutor do objeto precisa de parametros


// fetchColumn para buscar o item de coluna X

// while($studentData = $statement->fetchColumn(PDO::FETCH_ASSOC)){
//    $student = new  Student(
//        $studentData['id'],
//        $studentData['name'],
//        new DateTimeImmutable($studentData['birth_date']),
//    );
//    echo $student->age() . PHP_EOL;
//}

// fatch para buscar 1 linha
// aqui estamos usanso while para poder ler dado por dado utilizado tambem quando é muitos dados a processar

// while($studentData = $statement->fetch(PDO::FETCH_ASSOC)){
//    $student = new  Student(
//        $studentData['id'],
//        $studentData['name'],
//        new DateTimeImmutable($studentData['birth_date']),
//    );
//    echo $student->age() . PHP_EOL;
//}


//fatchAll para buscar todos

$studentDataList  = $statement->fetchALL($pdo::FETCH_ASSOC);
$statementList = [];
foreach ($studentDataList as $studentData){
    $statementList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new DateTimeImmutable($studentData['birth_date']),
    );
 var_dump($statementList);
}

