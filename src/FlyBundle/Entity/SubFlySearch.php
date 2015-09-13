<?php

namespace FlyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * SubFlySearch
 *
 * @ORM\Entity
 * @ORM\Table(indexes={@ORM\Index(name="sub_fly_search_flySearch_idx", columns={"fly_search_id"})})
 */
class SubFlySearch
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
     * @ORM\ManyToOne(targetEntity="FlyBundle\Entity\FlySearch")
     * @ORM\JoinColumn(nullable=false)
     */
    private $flySearch;
    
    /**
     * @ORM\ManyToOne(targetEntity="FlyBundle\Entity\Airport")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"sfs"})
     */
    private $departure;    

    /**
     * @ORM\ManyToOne(targetEntity="FlyBundle\Entity\Airport")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"sfs"})
     */
    private $arrival;

    /**
     * @var string
     *
     * @ORM\Column(name="departureDate", type="string", length=255)
     * @Groups({"sfs"})
     */
    private $departureDate;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivalDate", type="string", length=255)
     * @Groups({"sfs"})
     */
    private $arrivalDate;
    
    /**
     * @var travel[]
     * @ORM\OneToMany(targetEntity = "Travel", mappedBy = "subFlySearch")
     * @Groups({"sfs"})
     */
    private $travels;


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

    /**
     * Set flySearch
     *
     * @param \FlyBundle\Entity\FlySearch $flySearch
     * @return SubFlySearch
     */
    public function setFlySearch(\FlyBundle\Entity\FlySearch $flySearch)
    {
        $this->flySearch = $flySearch;

        return $this;
    }

    /**
     * Get flySearch
     *
     * @return \FlyBundle\Entity\FlySearch 
     */
    public function getFlySearch()
    {
        return $this->flySearch;
    }

    /**
     * Set departure
     *
     * @param \FlyBundle\Entity\Airport $departure
     * @return SubFlySearch
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
     * @return SubFlySearch
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
     * Constructor
     */
    public function __construct()
    {
        $this->travels = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add travels
     *
     * @param \FlyBundle\Entity\Travel $travels
     * @return SubFlySearch
     */
    public function addTravel(\FlyBundle\Entity\Travel $travels)
    {
        $this->travels[] = $travels;

        return $this;
    }

    /**
     * Remove travels
     *
     * @param \FlyBundle\Entity\Travel $travels
     */
    public function removeTravel(\FlyBundle\Entity\Travel $travels)
    {
        $this->travels->removeElement($travels);
    }

    /**
     * Get travels
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTravels()
    {
        return $this->travels;
    }
}
