<?php

require_once "bootstrap.php";

$dql = "SELECT t FROM Test t";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$tests = $query->getResult();

foreach($tests AS $test) {
    ## var_dump($test);
    echo $test->getName()."\n";
}
