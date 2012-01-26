<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Employees
 */
class Employees
{
    /**
     * @var decimal $commissionPct
     */
    private $commissionPct;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $firstName
     */
    private $firstName;

    /**
     * @var datetime $hireDate
     */
    private $hireDate;

    /**
     * @var string $lastName
     */
    private $lastName;

    /**
     * @var string $phoneNumber
     */
    private $phoneNumber;

    /**
     * @var decimal $salary
     */
    private $salary;

    /**
     * @var integer $employeeId
     */
    private $employeeId;

    /**
     * @var Departments
     */
    private $department;

    /**
     * @var Jobs
     */
    private $job;

    /**
     * @var Employees
     */
    private $manager;


    /**
     * Set commissionPct
     *
     * @param decimal $commissionPct
     */
    public function setCommissionPct($commissionPct)
    {
        $this->commissionPct = $commissionPct;
    }

    /**
     * Get commissionPct
     *
     * @return decimal 
     */
    public function getCommissionPct()
    {
        return $this->commissionPct;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set hireDate
     *
     * @param datetime $hireDate
     */
    public function setHireDate($hireDate)
    {
        $this->hireDate = $hireDate;
    }

    /**
     * Get hireDate
     *
     * @return datetime 
     */
    public function getHireDate()
    {
        return $this->hireDate;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set salary
     *
     * @param decimal $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * Get salary
     *
     * @return decimal 
     */
    public function getSalary()
    {
        return $this->salary;
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