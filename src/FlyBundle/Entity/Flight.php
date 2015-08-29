<?php

namespace FlyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Flight
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Flight
{
    use TimestampableEntity;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="FlyBundle\Entity\Travel")
     * @ORM\JoinColumn(nullable=false)
     */
    private $travel;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="indice", type="integer", length=255)
     * @Groups({"f"})
     */
    private $indice;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="wayType", type="integer", length=255)
     * @Groups({"f"})
     */
    private $wayType;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="takeOffDate", type="datetime")
     * @Groups({"f"})
     */
    private $takeOffDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="landDate", type="datetime")
     * @Groups({"f"})
     */
    private $landDate;

    /**
     * @var string
     *
     * @ORM\Column(name="airline", type="string", length=255)
     * @Groups({"f"})
     */
    private $airline;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=255)
     * @Groups({"f"})
     */
    private $flightNumber;

    /**
     * @ORM\ManyToOne(targetEntity="FlyBundle\Entity\Airport")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"f"})
     */
    private $departure;

    /**
     * @ORM\ManyToOne(targetEntity="FlyBundle\Entity\Airport")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"f"})
     */
    private $arrival;


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
     * Set takeOffDate
     *
     * @param \DateTime $takeOffDate
     * @return Flight
     */
    public function setTakeOffDate($takeOffDate)
    {
        $this->takeOffDate = $takeOffDate;

        return $this;
    }

    /**
     * Get takeOffDate
     *
     * @return \DateTime 
     */
    public function getTakeOffDate()
    {
        return $this->takeOffDate;
    }

    /**
     * Set landDate
     *
     * @param \DateTime $landDate
     * @return Flight
     */
    public function setLandDate($landDate)
    {
        $this->landDate = $landDate;

        return $this;
    }

    /**
     * Get landDate
     *
     * @return \DateTime 
     */
    public function getLandDate()
    {
        return $this->landDate;
    }

    /**
     * Set airline
     *
     * @param string $airline
     * @return Flight
     */
    public function setAirline($airline)
    {
        $this->airline = $airline;

        return $this;
    }

    /**
     * Get airline
     *
     * @return string 
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Set flightNumber
     *
     * @param string $flightNumber
     * @return Flight
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Get flightNumber
     *
     * @return string 
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Set travel
     *
     * @param \FlyBundle\Entity\Travel $travel
     * @return Flight
     */
    public function setTravel(\FlyBundle\Entity\Travel $travel)
    {
        $this->travel = $travel;

        return $this;
    }

    /**
     * Get travel
     *
     * @return \FlyBundle\Entity\Travel 
     */
    public function getTravel()
    {
        return $this->travel;
    }

    /**
     * Set departure
     *
     * @param \FlyBundle\Entity\Airport $departure
     * @return Flight
     */
    public function setDeparture(\FlyBundle\Entity\Airport $departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \FlyBundle\Entity\Airport 
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param \FlyBundle\Entity\Airport $arrival
     * @return Flight
     */
    public function setArrival(\FlyBundle\Entity\Airport $arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return \FlyBundle\Entity\Airport 
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set indice
     *
     * @param integer $indice
     * @return Flight
     */
    public function setIndice($indice)
    {
        $this->indice = $indice;

        return $this;
    }

    /**
     * Get indice
     *
     * @return integer 
     */
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Set wayType
     *
     * @param integer $wayType
     * @return Flight
     */
    public function setWayType($wayType)
    {
        $this->wayType = $wayType;

        return $this;
    }

    /**
     * Get wayType
     *
     * @return integer 
     */
    public function getWayType()
    {
        return $this->wayType;
    }
}
