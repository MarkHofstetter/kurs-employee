<?php
// entities/Department.php
/**
 * @Entity @Table(name="departments")
 */
class Department
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;

    /** @Column(type="string") */
    protected $name;

	/**
     * @OneToMany(targetEntity="Employee", mappedBy="department")
     * @var Employee[]
     */
    protected $employees_in_department;
  

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