<?php

namespace Alura\Pdo\Domain\Repository;
use Alura\Pdo\Domain\Model\Student;

interface StudentRepository
{
    public function allStudents(): array;
    public function studentsBirthAt(\DateTimeImmutable $birthDate): array;

    public function update(Student $student): bool;
    public function insert(Student $student): bool;
    public function save(Student $student): bool;
    public function delete(Student $student): bool;
}