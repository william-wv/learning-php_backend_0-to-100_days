<?php

namespace Alura\Pdo\Infra\Repository;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;
use PDO;

class PdoStudentRepository implements StudentRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
            // ConnectionCreator::createConnection();
    }

    public function allStudents(): array
    {
        $sqlQuery = 'SELECT * FROM students;';
        $stmt = $this->connection->query($sqlQuery);

        return $this->hydrateStudentList($stmt);
    }
    public function studentsBirthAt(\DateTimeImmutable $birthDate): array
    {
        $sqlQuery = 'SELECT * FROM students WHERE birth_date = ?;';
        $stmt = $this->connection->prepare($sqlQuery);
        $stmt->bindValue(1, $birthDate->format('Y-m-d'));
        $stmt->execute();

        return $this->hydrateStudentList($stmt);
    }
    private function y(\PDOStatement $statement): array
    {
        $studentsDataList = $statement->fetchAll(\PDO::FETCH_ASSOC);
        $studentsList = [];

        foreach ($studentsDataList as $studentData) {
            $studentsList[] = new Student(
                $studentData['id'],
                $studentData['name'],
                new \DateTimeImmutable($studentData['birth_date'])
            );
        }

        return $studentsList;
    }
    public function update(Student $student): bool
    {
        $updateQuery = "UPDATE students SET name = :name, birth_date = :birth_date WHERE id = :id";
        $statement = $this->connection->prepare($updateQuery);
        $statement->bindValue(':name', $student->name());
        $statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
        $statement->bindValue(':id', $student->id(), PDO::PARAM_INT);

        return $statement->execute();
    }
    public function save(Student $student): bool
    {
        if ($student->id() === null) {
            return $this->insert($student);
        }

        return $this->update($student);
    }
    public function delete(Student $student): bool
    {
        $stmt = $this->connection->prepare("DELETE FROM students WHERE id = ?;");
        $stmt->bindValue(1, $student->id(), \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function insert(Student $student): bool
    {
        $insertQuery = 'INSERT INTO students (name, birth_date) VALUES (:name, :birth_date)';
        $statement = $this->connection->prepare($insertQuery);
        $success = $statement->execute([
            ":name" => $student->name(),
            ":birth_date" => $student->birthDate()->format('Y-m-d')
        ]);
        if ($success) {
            $student->defineId($this->connection->lastInsertId());
        }

        return $success;
    }
}
