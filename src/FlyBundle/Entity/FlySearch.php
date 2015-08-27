<?php

namespace FlyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * FlySearch
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FlySearch
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
     * @var subFlySearch[]
     * @ORM\OneToMany(targetEntity = "SubFlySearch", mappedBy = "flySearch")
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
