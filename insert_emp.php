

<form name="form" action="<?php $PHP_SELF; ?>" method="POST">
<table style="font-family: verdana; font-size: 12px">
	<tr>
		<td style="font-family: verdana; font-size: 14px; font-weight: bold">New Employee</td>
	</tr>
	<tr>
		<td height="15px"></td>
	</tr>	
	<tr>
		<td>First Name:</td>
		<td><input name="firstName" type="text" size="30"></td>
	</tr>
	<tr>
		<td>Last Name:
		<td><input name="lastName" type="text" size="30"> 
	</tr>
	<tr>
		<td>Email:
		<td><input name="email" type="text" size="30"> 
	</tr>
	<tr>
		<td>Hiredate:
		<td><input	name="hireDate" type="text" size="30"> 
	</tr>
	<tr> 
		<td>JobId:
		<td><input name="jobId" type="text" size="30">  
	</tr>
	<tr>
		<td>Salary:
		<td><input name="salary" type="text"	size="30">  
	</tr>
	<tr>
		<td></td>
		<TD align= "right"><input type="submit" value="Save"></TD>
	</tr>
	</table>
</form>
<?php

require_once 'Employee.php';

$employee = new Employee();

if ($_POST['lastName']) {
	if ($_POST['firstName']) {
		$employee->firstName = $_POST['firstName'];
	}
	if ($_POST['lastName']) {
		$employee->lastName = $_POST['lastName'];
	}
	if ($_POST['email']) {
		$employee->email = $_POST['email'];
	}
	if ($_POST['hireDate']) {
		$employee->hireDate = $_POST['hireDate'];
	}
	if ($_POST['jobId']) {
		$employee->jobId = $_POST['jobId'];
	}
	if ($_POST['salary']) {
		$employee->salary = $_POST['salary'];
	}
	try{
		$employee->store();
	}catch(PEAR_Exception $ex){
		print "User with email $email allready exist";
		exit;
	}
		$employee->commit();
}



