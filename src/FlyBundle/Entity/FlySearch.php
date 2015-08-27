<?php

namespace FlyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FlySearch
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FlySearch
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
     * @var subFlySearch[]
     * @ORM\OneToMany(targetEntity = "subFlySearch", mappedBy = "flySearch")
     */
    private $subFlySearches;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbAdults", type="integer")
     */
    private $nbAdults;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbChildren", type="integer")
     */
    private $nbChildren;


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
     * @param \stdClass $departure
     * @return FlySearch
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \stdClass 
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrivals
     *
     * @param string $arrivals
     * @return FlySearch
     */
    public function setArrivals($arrivals)
    {
        $this->arrivals = $arrivals;

        return $this;
    }

    /**
     * Get arrivals
     *
     * @return string 
     */
    public function getArrivals()
    {
        return $this->arrivals;
    }

    /**
     * Set departureDate
     *
     * @param \DateTime $departureDate
     * @return FlySearch
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Get departureDate
     *
     * @return \DateTime 
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Set arrivalDate
     *
     * @param \DateTime $arrivalDate
     * @return FlySearch
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Get arrivalDate
     *
     * @return \DateTime 
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Set nbAdults
     *
     * @param integer $nbAdults
     * @return FlySearch
     */
    public function setNbAdults($nbAdults)
    {
        $this->nbAdults = $nbAdults;

        return $this;
    }

    /**
     * Get nbAdults
     *
     * @return integer 
     */
    public function getNbAdults()
    {
        return $this->nbAdults;
    }

    /**
     * Set nbChildren
     *
     * @param integer $nbChildren
     * @return FlySearch
     */
    public function setNbChildren($nbChildren)
    {
        $this->nbChildren = $nbChildren;

        return $this;
    }

    /**
     * Get nbChildren
     *
     * @return integer 
     */
    public function getNbChildren()
    {
        return $this->nbChildren;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subFlySearches = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add subFlySearches
     *
     * @param \FlyBundle\Entity\subFlySearch $subFlySearches
     * @return FlySearch
     */
    public function addSubFlySearch(\FlyBundle\Entity\subFlySearch $subFlySearches)
    {
        $this->subFlySearches[] = $subFlySearches;

        return $this;
    }

    /**
     * Remove subFlySearches
     *
     * @param \FlyBundle\Entity\subFlySearch $subFlySearches
     */
    public function removeSubFlySearch(\FlyBundle\Entity\subFlySearch $subFlySearches)
    {
        $this->subFlySearches->removeElement($subFlySearches);
    }

    /**
     * Get subFlySearches
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubFlySearches()
    {
        return $this->subFlySearches;
    }
}
