<?php
require_once 'entities/Test.php';
$test = new Test();
$test->setName("Albert");
$entityManager->persist($test);
$entityManager->flush;

echo "tried to persist Test";