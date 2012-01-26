<?php
// create_employee.php
require_once "bootstrap.php";


$department_name  = 'IT';
# $employee_name    = $argv[2];
# $employee_salary  = $argv[3];

$department = $entityManager->getRepository('Departments')
                         ->findOneBy(array('departmentName' => $department_name));

echo $department->GetDepartmentId();
/*
$employee = new Employee();
$employee->setName($employee_name);
$employee->setSalary($employee_salary);
$employee->setDepartment($department);

$entityManager->persist($employee);
$entityManager->flush();
*/
