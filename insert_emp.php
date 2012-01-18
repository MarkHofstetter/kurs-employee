<form name="form" 
      action="<?php $PHP_SELF; ?>"
	  method="post">  
Last Name:<input name="last_name" type="text" size="30"><br>
Salary:<input name="salary"    type="text" size="30"><br>
Email:<input name="email"    type="text" size="30"><br>
<input type="submit" value="Store">
</form>
<?php

require_once('Employee.php');

if ($_POST['last_name']) {
    $employee = new Employee;
  $employee->last_name = $_POST['last_name'];
  $employee->salary    = $_POST['salary'];  
  $employee->email    = $_POST['email'];  
  $employee->store();
  
  $employee->commit();
}
  
  
