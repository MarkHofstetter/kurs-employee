<?php

require_once 'PEAR/Exception.php';

class Employee{

	var $id;
	var $firstName;
	var $lastName;
	var $email;
	var $hireDate;
	var $jobId;
	var $salary;
	var $db;

	function Employee(){
		$this->dbConnect();
	}

	function setFirstName($firstName){
		$this->firstName = $firstName;
	}

	function setLastName($lastName){
		$this->lastName = $lastName;
	}

	function setSalary($salary){
		$this->salary = $salary;
	}

	private	function dbConnect(){
		$this->db = oci_connect('hr', 'hr', 'orcl');
	}

	function read(){
		
		$query = oci_parse($this->db,
				"select employee_id employee_id,
				first_name first_name, 
				last_name last_name, 
				email email,
				hire_date hire_date,
				job_id job_id,
				salary salary 
				from employees
				where last_name = :suche");
		oci_bind_by_name($query, ":suche", $this->lastName);
		$r = oci_execute($query, OCI_DEFAULT);
		$row = oci_fetch_array($query, OCI_ASSOC);
		if(!isset($row['LAST_NAME'])){
			throw new PEAR_Exception("no Employee ".$this->lastName,
					404);
		}else{
			$this->id = $row['EMPLOYEE_ID'];
			$this->firstName = $row['FIRST_NAME'];
			$this->lastName = $row['LAST_NAME'];
			$this->email = $row['EMAIL'];
			$this->hireDate = $row['HIRE_DATE'];
			$this->jobId = $row['JOB_ID'];
			$this->salary = $row['SALARY'];
		}
// 		printf("%s %s verdient %s.-$ p/a<br>",
// 				$row['FN'], $row['LN'], $row['S']);

	}

	function store() {
		$query = "insert into employees (employee_id,
		first_name, last_name, email, hire_date, salary, job_id)
		values (
		employees_seq.nextval, :p_firstName, :p_lastName, :p_email,
		sysdate, :p_salary, :p_job_id)";
		$q = oci_parse($this->db, $query);
		oci_bind_by_name($q, ":p_firstName", $this->firstName);
		oci_bind_by_name($q, ":p_lastName", $this->lastName);
		oci_bind_by_name($q, ":p_email", $this->email);
// 		oci_bind_by_name($q, ":p_hire_date", $this->hireDate);
		oci_bind_by_name($q, ":p_salary", $this->salary);
		oci_bind_by_name($q, ":p_job_id", $this->jobId);
		$r = oci_execute($q, OCI_DEFAULT);
	}

	function delete(){
		$query = "delete from employees where id=:p_id";
		$q = oci_parse($this->db, $query);
		oci_bind_by_name($q, ":p_id", $this->id);
	} 
	
	function test(){
		
	}
	
	function update(){
		
	}
	
	function commit(){
		oci_commit($this->db);
	}
	
	function __set($u, $a) {
		die("ERROR: you tried to set $u with $a");
	}

	function __get($u) {
		die("ERROR: you tried to get $u");
	}

	function __call($u, $a) {
		die("ERROR: you tried to call $u with $a");
	}

}