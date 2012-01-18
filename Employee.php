<?php

require_once 'PEAR/Exception.php';
require_once 'EmpDep.php';

class Employee extends EmpDep {
  var $id, $last_name, $salary, $email;  
 
  function set_last_name($last_name) {
    $this->last_name = $last_name;
  }

  function read() {
	$q = oci_parse($this->db,
      "select last_name ln, salary
	     from employees
         where last_name = :b_last_name");
    oci_bind_by_name
	   ($q, ":b_last_name", $this->last_name);
	$r = oci_execute($q, OCI_DEFAULT);
    $row = oci_fetch_array($q, OCI_ASSOC);
    if (!isset($row['LN'])) {
	  throw new PEAR_Exception("no employee ".$this->last_name
	    , 404);
	}
	
	$this->salary = $row['SALARY'];
	
  }

  function store() {
    $q = oci_parse($this->db,
      "insert into employees (
         employee_id,
         last_name,
		 salary,
         email,
         hire_date,
         job_id
         ) values (
         employees_seq.nextval,
        :b_last_name,
		:b_salary,
        :b_email,
        sysdate,
        'IT_PROG'
       )");
    oci_bind_by_name
	   ($q, ":b_last_name", $this->last_name);
	oci_bind_by_name
	   ($q, ":b_salary", $this->salary);
	oci_bind_by_name
	   ($q, ":b_email", $this->email);
	$r = oci_execute($q, OCI_DEFAULT);  
  }

  function delete() {}
  
}
