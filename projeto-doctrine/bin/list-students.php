<?php

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$repo = $entityManager->getRepository(Student::class);
/** @var Student[] */
$list = $repo->findAll();

foreach ($list as $key => $student) {
    echo "ID: $key Nome: $student->name \n\n";
}

/** @var Student */
$student = $repo->find(2);
echo "Estudante: $student->name\n";

/** @var Student */
$student1 = $repo->findOneBy([
    'name' => 'Flavio Cezar'
]);
echo "Estudante: $student1->name\n";