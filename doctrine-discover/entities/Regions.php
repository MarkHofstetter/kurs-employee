<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Regions
 */
class Regions
{
    /**
     * @var string $regionName
     */
    private $regionName;

    /**
     * @var integer $regionId
     */
    private $regionId;


    /**
     * Set regionName
     *
     * @param string $regionName
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;
    }

    /**
     * Get regionName
     *
     * @return string 
     */
    public function getRegionName()
    {
        return $this->regionName;
    }

    /**
     * Get regionId
     *
     * @return integer 
     */
    public function getRegionId()
    {
        return $this->regionId;
    }
}