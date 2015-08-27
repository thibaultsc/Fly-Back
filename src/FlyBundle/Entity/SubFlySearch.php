<?php

namespace FlyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubFlySearch
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SubFlySearch
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="departure", type="string", length=255)
     */
    private $departure;

    /**
     * @var string
     *
     * @ORM\Column(name="arrival", type="string", length=255)
     */
    private $arrival;

    /**
     * @var string
     *
     * @ORM\Column(name="departureDate", type="string", length=255)
     */
    private $departureDate;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivalDate", type="string", length=255)
     */
    private $arrivalDate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set departure
     *
     * @param string $departure
     * @return SubFlySearch
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string 
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     * @return SubFlySearch
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string 
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set departureDate
     *
     * @param string $departureDate
     * @return SubFlySearch
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Get departureDate
     *
     * @return string 
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Set arrivalDate
     *
     * @param string $arrivalDate
     * @return SubFlySearch
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Get arrivalDate
     *
     * @return string 
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }
}
