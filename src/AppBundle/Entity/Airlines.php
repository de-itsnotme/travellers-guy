<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="airlines")
 */

class Airlines
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $airline_id;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=33)
     */
    private $alias;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $iata;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $icao;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $callsign;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $country_code;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $active;


    

    /**
     * Get airlineId
     *
     * @return integer
     */
    public function getAirlineId()
    {
        return $this->airline_id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Airlines
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return Airlines
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set iata
     *
     * @param string $iata
     *
     * @return Airlines
     */
    public function setIata($iata)
    {
        $this->iata = $iata;

        return $this;
    }

    /**
     * Get iata
     *
     * @return string
     */
    public function getIata()
    {
        return $this->iata;
    }

    /**
     * Set icao
     *
     * @param string $icao
     *
     * @return Airlines
     */
    public function setIcao($icao)
    {
        $this->icao = $icao;

        return $this;
    }

    /**
     * Get icao
     *
     * @return string
     */
    public function getIcao()
    {
        return $this->icao;
    }

    /**
     * Set callsign
     *
     * @param string $callsign
     *
     * @return Airlines
     */
    public function setCallsign($callsign)
    {
        $this->callsign = $callsign;

        return $this;
    }

    /**
     * Get callsign
     *
     * @return string
     */
    public function getCallsign()
    {
        return $this->callsign;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Airlines
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return Airlines
     */
    public function setCountryCode($countryCode)
    {
        $this->country_code = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Airlines
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }
}
