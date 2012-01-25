<?php
// create_employee.php
require_once "bootstrap.php";

$department_name  = $argv[1];
$employee_name    = $argv[2];
$employee_salary  = $argv[3];

$department = $entityManager->getRepository('Department')
                         ->findOneBy(array('name' => $department_name));

## echo $department->GetId();

$employee = new Employee();
$employee->setName($employee_name);
$employee->setSalary($employee_salary);
$employee->setDepartment($department);

$entityManager->persist($employee);
$entityManager->flush();



