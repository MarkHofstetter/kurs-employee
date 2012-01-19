<?php
// insert_test.php
require_once "bootstrap.php";

$newTest = $argv[1];

$test = new Test();
$test->setName($newTest);

$entityManager->persist($test);
$entityManager->flush();

echo "Created Test with ID " . $test->getId() . "\n";
