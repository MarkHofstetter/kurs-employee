<?php
// entities/Employee.php
/**
 * @Entity @Table(name="employees")
 */
class Employee
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    
	/** @Column(type="string") */
    protected $name;
	
	/** @Column(type="integer") */
    protected $salary;
    
	/**
     * @ManyToOne(targetEntity="Department", inversedBy="employees_in_department")
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
}