<?php
require_once "bootstrap.php";
require_once "entities/Employee.php";
require_once "entities/Department.php";

$department = new Department();
$department->setName("oracle_plsql");
$entityManager->persist($department);
$entityManager->flush();