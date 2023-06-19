<?php

namespace EMSI\SmartPhoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commande
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class commande
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
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prixtotal", type="decimal")
     */
    private $prixtotal;

    /**
     * @ORM\ManyToOne(targetEntity="Smartphone")
     *
     */
    private $smartphone;

    /**
     * @ORM\ManyToOne(targetEntity="utilisateur", cascade={"persist"})
     *
     */
    private $user;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }




    /**
     * @return mixed
     */
    public function getSmartphone()
    {
        return $this->smartphone;
    }

    /**
     * @param mixed $smartphone
     */
    public function setSmartphone($smartphone)
    {
        $this->smartphone = $smartphone;
    }




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
     * Set quantite
     *
     * @param integer $quantite
     * @return commande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prixtotal
     *
     * @param float $prixtotal
     * @return commande
     */
    public function setPrixtotal($prixtotal)
    {
        $this->prixtotal = $prixtotal;
    
        return $this;
    }

    /**
     * Get prixtotal
     *
     * @return float 
     */
    public function getPrixtotal()
    {
        return $this->prixtotal;
    }
}
