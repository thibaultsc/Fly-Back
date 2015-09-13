<?php

namespace FlyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Travel
 *
 * @ORM\Entity
 * @ORM\Table(indexes={@ORM\Index(name="travel_subFlySearch_idx", columns={"sub_fly_search_id"})})
 */
class Travel
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
     * @ORM\ManyToOne(targetEntity="FlyBundle\Entity\SubFlySearch")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"tsfs"})
     */
    private $subFlySearch;

    /**
     * @var flight[]
     * @ORM\OneToMany(targetEntity = "Flight", mappedBy = "travel")
     * @Groups({"t"})
     */
    private $flights;

    /**
     * @var price[]
     * @ORM\OneToMany(targetEntity = "Price", mappedBy = "travel")
     * @Groups({"t"})
     */
    private $prices;


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
     * Set subFlySearch
     *
     * @param string $subFlySearch
     * @return Travel
     */
    public function setSubFlySearch($subFlySearch)
    {
        $this->subFlySearch = $subFlySearch;

        return $this;
    }

    /**
     * Get subFlySearch
     *
     * @return string 
     */
    public function getSubFlySearch()
    {
        return $this->subFlySearch;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->flights = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add flights
     *
     * @param \FlyBundle\Entity\Flight $flights
     * @return Travel
     */
    public function addFlight(\FlyBundle\Entity\Flight $flights)
    {
        $this->flights[] = $flights;

        return $this;
    }

    /**
     * Remove flights
     *
     * @param \FlyBundle\Entity\Flight $flights
     */
    public function removeFlight(\FlyBundle\Entity\Flight $flights)
    {
        $this->flights->removeElement($flights);
    }

    /**
     * Get flights
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFlights()
    {
        return $this->flights;
    }

    /**
     * Add prices
     *
     * @param \FlyBundle\Entity\Price $prices
     * @return Travel
     */
    public function addPrice(\FlyBundle\Entity\Price $prices)
    {
        $this->prices[] = $prices;

        return $this;
    }

    /**
     * Remove prices
     *
     * @param \FlyBundle\Entity\Price $prices
     */
    public function removePrice(\FlyBundle\Entity\Price $prices)
    {
        $this->prices->removeElement($prices);
    }

    /**
     * Get prices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrices()
    {
        return $this->prices;
    }
}
