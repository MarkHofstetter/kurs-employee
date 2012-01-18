<form name="form" 
      action="<?php $PHP_SELF; ?>"
	  method="get">  
Name:<input name="name" type="text" size="30">
<br>
<input type="submit" value="Get Info">
</form>
<?php

require_once('Employee.php');

if ($_GET['name']) {
  $suche = $_GET['name'];
  $employee = new Employee;
  $employee->last_name = $suche;
  try {
    $employee->read();
    printf("%s verdient %s<br>", 
	   $employee->last_name, 
	   $employee->salary);
  } catch (PEAR_Exception $e) {
       // print $e;
	   echo "Not found<br>\n";
  }
}
