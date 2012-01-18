<?php

class EmpDep {
  var $db;
  
  function EmpDep() {
    $this->db_connect();
  }
  
  function db_connect() {
    $this->db = oci_connect('hr', 'hr', 'orcl');
  }
  
  function commit() {
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