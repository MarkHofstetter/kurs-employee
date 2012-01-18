<form name="form" 
      action="<?php $PHP_SELF; ?>"
	  method="get">  
Name:<input name="name" type="text" size="30">
<br>
<input type="submit" value="Delete">
</form>
<?php

require_once('Employee.php');

if ($_GET['name']) {
  $suche = $_GET['name'];
  $employee = new Employee;
  $employee->last_name = $suche;
  try {
    $employee->delete();
    printf("%s wurde gelöscht<br>", 
	   $employee->last_name);
  } catch (PEAR_Exception $e) {
       // print $e;
	   echo "Not found<br>\n";
  }
}
