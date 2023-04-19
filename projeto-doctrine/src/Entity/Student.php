<?php

namespace Alura\Doctrine\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;

#[Entity]
class Student
{
    #[Id]
    #[GeneratedValue]
    #[Column]
    public int $id;

    #[OneToMany(targetEntity: Phone::class, mappedBy: 'student')]
    public readonly iterable $phones;
    public function __construct(
    #[Column]
        public readonly string $name
    ) {
    }
}