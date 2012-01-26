<?php
// bootstrap.php

require_once "entities/Employees.php";
require_once "entities/Departments.php";
require_once "entities/Locations.php";
require_once "entities/Regions.php";
require_once "entities/Countries.php";
require_once "entities/Jobs.php";

if (!class_exists("Doctrine\Common\Version", false)) {
  require_once "bootstrap_doctrine.php";
}
