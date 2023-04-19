<?php
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once 'vendor/autoload.php';

$entitymanager = EntityManagerCreator::createEntityManager();

var_dump($entitymanager);