<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 */
class Countries
{
    /**
     * @var string $countryName
     */
    private $countryName;

    /**
     * @var string $countryId
     */
    private $countryId;

    /**
     * @var Regions
     */
    private $region;


    /**
     * Set countryName
     *
     * @param string $countryName
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    }

    /**
     * Get countryName
     *
     * @return string 
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Get countryId
     *
     * @return string 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set region
     *
     * @param Regions $region
     */
    public function setRegion(\Regions $region)
    {
        $this->region = $region;
    }

    /**
     * Get region
     *
     * @return Regions 
     */
    public function getRegion()
    {
        return $this->region;
    }
}