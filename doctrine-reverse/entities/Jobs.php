<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Jobs
 */
class Jobs
{
    /**
     * @var string $jobTitle
     */
    private $jobTitle;

    /**
     * @var integer $maxSalary
     */
    private $maxSalary;

    /**
     * @var integer $minSalary
     */
    private $minSalary;

    /**
     * @var string $jobId
     */
    private $jobId;


    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * Get jobTitle
     *
     * @return string 
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set maxSalary
     *
     * @param integer $maxSalary
     */
    public function setMaxSalary($maxSalary)
    {
        $this->maxSalary = $maxSalary;
    }

    /**
     * Get maxSalary
     *
     * @return integer 
     */
    public function getMaxSalary()
    {
        return $this->maxSalary;
    }

    /**
     * Set minSalary
     *
     * @param integer $minSalary
     */
    public function setMinSalary($minSalary)
    {
        $this->minSalary = $minSalary;
    }

    /**
     * Get minSalary
     *
     * @return integer 
     */
    public function getMinSalary()
    {
        return $this->minSalary;
    }

    /**
     * Get jobId
     *
     * @return string 
     */
    public function getJobId()
    {
        return $this->jobId;
    }
}