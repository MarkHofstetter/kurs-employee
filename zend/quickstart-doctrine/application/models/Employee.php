<?php
// entities/Employee.php
/**
 * @Entity @Table(name="employees")
 */
class Default_Model_Employee
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    
	/** @Column(type="string") */
    protected $name;
	
	/** @Column(type="integer") */
    protected $salary;
    
	/**
     * @ManyToOne(targetEntity="Default_Model_Department", inversedBy="employees_in_department")
     */
    protected $department;


  public function getName() {
        return $this->name;
  }

  public function setName($name) {
        $this->name = $name;
  }

  public function getId() {
        return $this->id;
  }

  public function setSalary($salary) {
        $this->salary = $salary;
  }  
  
  public function setDepartment($department) {
        $this->department = $department;
  }  
}