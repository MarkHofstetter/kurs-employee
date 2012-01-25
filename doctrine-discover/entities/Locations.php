<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Locations
 */
class Locations
{
    /**
     * @var string $city
     */
    private $city;

    /**
     * @var string $postalCode
     */
    private $postalCode;

    /**
     * @var string $stateProvince
     */
    private $stateProvince;

    /**
     * @var string $streetAddress
     */
    private $streetAddress;

    /**
     * @var integer $locationId
     */
    private $locationId;

    /**
     * @var Countries
     */
    private $country;


    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Get postalCode
     *
     * @return string 
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set stateProvince
     *
     * @param string $stateProvince
     */
    public function setStateProvince($stateProvince)
    {
        $this->stateProvince = $stateProvince;
    }

    /**
     * Get stateProvince
     *
     * @return string 
     */
    public function getStateProvince()
    {
        return $this->stateProvince;
    }

    /**
     * Set streetAddress
     *
     * @param string $streetAddress
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    /**
     * Get streetAddress
     *
     * @return string 
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * Get locationId
     *
     * @return integer 
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set country
     *
     * @param Countries $country
     */
    public function setCountry(\Countries $country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return Countries 
     */
    public function getCountry()
    {
        return $this->country;
    }
}