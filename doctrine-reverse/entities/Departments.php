<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Departments
 */
class Departments
{
    /**
     * @var string $departmentName
     */
    private $departmentName;

    /**
     * @var integer $departmentId
     */
    private $departmentId;

    /**
     * @var Locations
     */
    private $location;

    /**
     * @var Employees
     */
    private $manager;


    /**
     * Set departmentName
     *
     * @param string $departmentName
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
    }

    /**
     * Get departmentName
     *
     * @return string 
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Get departmentId
     *
     * @return integer 
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * Set location
     *
     * @param Locations $location
     */
    public function setLocation(\Locations $location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return Locations 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set manager
     *
     * @param Employees $manager
     */
    public function setManager(\Employees $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Get manager
     *
     * @return Employees 
     */
    public function getManager()
    {
        return $this->manager;
    }
}