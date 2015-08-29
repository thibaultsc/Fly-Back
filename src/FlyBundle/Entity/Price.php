<?php

namespace FlyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Price
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Price
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
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     * @Groups({"p"})
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="agency", type="string", length=255)
     * @Groups({"p"})
     */
    private $agency;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     * @Groups({"p"})
     */
    private $url;


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
     * Set price
     *
     * @param float $price
     * @return Price
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set agency
     *
     * @param string $agency
     * @return Price
     */
    public function setAgency($agency)
    {
        $this->agency = $agency;

        return $this;
    }

    /**
     * Get agency
     *
     * @return string 
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Price
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set travel
     *
     * @param \FlyBundle\Entity\Travel $travel
     * @return Price
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
}
