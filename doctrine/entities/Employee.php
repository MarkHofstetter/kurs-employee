<?php
// entities/Employee.php
class Employee {
  protected $id;   #nie public
  protected $name;
  protected $salary;
  protected $dep_id;
  
  public function getName() {
        return $this->name;
  }

  public function setName($name) {
        $this->name = $name;
  }

  public function getId() {
        return $this->id;
  }

  public function getSalary() {
        return $this->salary;
  }
  
  public function setSalary($salary) {
        $this->salary = $salary;
  }
  
  public function getDep_id() {
        return $this->dep_id;
  }
  
  public function setDep_id($dep_id) {
        $this->dep_id = $dep_id;
  }
}
?>