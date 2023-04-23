<?php

use Alura\Doctrine\Entity\Course;
use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$repo = $entityManager->getRepository(Student::class);
/** @var Student[] */
$list = $repo->findAll();

foreach ($list as $key => $student) {
    echo "ID: $key Nome: $student->name\n";
    echo "Telefones:\n";

    echo implode(', ', $student->phones()
        ->map(fn(Phone $phone) => $phone->number)
        ->toArray());
    echo PHP_EOL;

    echo "Courses:\n";

    echo implode(', ', $student->courses()
        ->map(fn(Course $course) => $course->name)
        ->toArray());
    echo PHP_EOL;
}

// /** @var Student */
// $student = $repo->find(2);
// echo "Estudante: $student->name\n";

// /** @var Student */
// $student1 = $repo->findOneBy([
//     'name' => 'Flavio Cezar'
// ]);
// echo "Estudante: $student1->name\n";