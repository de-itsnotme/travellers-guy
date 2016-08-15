<?php
// src/AppBundle/Entity/Airports.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="airports")
 */

class Airports
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $airlineId;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $name;


    /**
     * @ORM\Column(type="string", length=39)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $countryCode;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $iata_faa;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $icao;

    /**
     * @ORM\Column(type="float")
     */
    private $latitute;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    /**
     * @ORM\Column(type="bigint", length=20)
     */
    private $altitude;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $timeZone;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $dst;

    /**
     * @ORM\Column(type="string", length=22)
     */
    private $tzdatabasetimezone;


    /**
     * Get airlineId
     *
     * @return integer
     */
    public function getAirlineId()
    {
        return $this->airlineId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Airports
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
     * Set city
     *
     * @param string $city
     *
     * @return Airports
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
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
     * Set country
     *
     * @param string $country
     *
     * @return Airports
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
     * Set iataFaa
     *
     * @param string $iataFaa
     *
     * @return Airports
     */
    public function setIataFaa($iataFaa)
    {
        $this->iata_faa = $iataFaa;

        return $this;
    }

    /**
     * Get iataFaa
     *
     * @return string
     */
    public function getIataFaa()
    {
        return $this->iata_faa;
    }

    /**
     * Set icao
     *
     * @param string $icao
     *
     * @return Airports
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
     * Set latitute
     *
     * @param float $latitute
     *
     * @return Airports
     */
    public function setLatitute($latitute)
    {
        $this->latitute = $latitute;

        return $this;
    }

    /**
     * Get latitute
     *
     * @return float
     */
    public function getLatitute()
    {
        return $this->latitute;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Airports
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set altitude
     *
     * @param integer $altitude
     *
     * @return Airports
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get altitude
     *
     * @return integer
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set timeZone
     *
     * @param string $timeZone
     *
     * @return Airports
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Get timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Set dst
     *
     * @param string $dst
     *
     * @return Airports
     */
    public function setDst($dst)
    {
        $this->dst = $dst;

        return $this;
    }

    /**
     * Get dst
     *
     * @return string
     */
    public function getDst()
    {
        return $this->dst;
    }

    /**
     * Set tzdatabasetimezone
     *
     * @param string $tzdatabasetimezone
     *
     * @return Airports
     */
    public function setTzdatabasetimezone($tzdatabasetimezone)
    {
        $this->tzdatabasetimezone = $tzdatabasetimezone;

        return $this;
    }

    /**
     * Get tzdatabasetimezone
     *
     * @return string
     */
    public function getTzdatabasetimezone()
    {
        return $this->tzdatabasetimezone;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return Airports
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
}
