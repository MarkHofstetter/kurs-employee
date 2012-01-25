<?php
// create_department.php
require_once "bootstrap.php";

$newdepartment = $argv[1];

$department = new Department();
$department->setName($newdepartment);

$entityManager->persist($department);
$entityManager->flush();

echo "Created department with ID " . $department->getId() . "\n";
