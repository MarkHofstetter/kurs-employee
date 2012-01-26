<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * JobHistory
 */
class JobHistory
{
    /**
     * @var datetime $endDate
     */
    private $endDate;

    /**
     * @var integer $employeeId
     */
    private $employeeId;

    /**
     * @var datetime $startDate
     */
    private $startDate;

    /**
     * @var Jobs
     */
    private $job;

    /**
     * @var Employees
     */
    private $employee;

    /**
     * @var Departments
     */
    private $department;


    /**
     * Set endDate
     *
     * @param datetime $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * Get endDate
     *
     * @return datetime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set employeeId
     *
     * @param integer $employeeId
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;
    }

    /**
     * Get employeeId
     *
     * @return integer 
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Set startDate
     *
     * @param datetime $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * Get startDate
     *
     * @return datetime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set job
     *
     * @param Jobs $job
     */
    public function setJob(\Jobs $job)
    {
        $this->job = $job;
    }

    /**
     * Get job
     *
     * @return Jobs 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set employee
     *
     * @param Employees $employee
     */
    public function setEmployee(\Employees $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Get employee
     *
     * @return Employees 
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set department
     *
     * @param Departments $department
     */
    public function setDepartment(\Departments $department)
    {
        $this->department = $department;
    }

    /**
     * Get department
     *
     * @return Departments 
     */
    public function getDepartment()
    {
        return $this->department;
    }
}