<?php
// bootstrap.php

require_once "entities/Employee.php";
require_once "entities/Department.php";

if (!class_exists("Doctrine\Common\Version", false)) {
  require_once "bootstrap_doctrine.php";  
}
