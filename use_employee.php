<?php

require('Employee.php');

$employee = new Employee;

$employee->last_name = 'Bumsti';


$employee->set_last_name('Fay');


print $employee->last_name;
$employee->read();

print_r($employee);