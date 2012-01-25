<?php
//read_employees.php
require_once "bootstrap.php";

$dql = "SELECT  p.name, p.salary  AS openBugs FROM Bug b ".
       "JOIN b.products p WHERE b.status = 'OPEN' GROUP BY p.id";
$productBugs = $entityManager->createQuery($dql)->getScalarResult();

foreach($productBugs as $productBug) {
    echo $productBug['name']." has " . $productBug['openBugs'] . " open bugs!\n";
}


$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$tests = $query->getResult();

foreach($tests AS $test) {
    ## var_dump($test);
    echo $test->getName()."\n";
}
?>