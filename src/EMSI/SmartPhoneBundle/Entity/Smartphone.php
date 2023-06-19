<?php

namespace EMSI\SmartPhoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Smartphone
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Smartphone
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
     * @ORM\Column(name="marque", type="string", length=30)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=30)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=30)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=30)
     */
    private $taille;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="decimal")
     */
    private $prix;


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
     * Set marque
     *
     * @param string $marque
     * @return Smartphone
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    
        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return Smartphone
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    
        return $this;
    }

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     * @return Smartphone
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    
        return $this;
    }

    /**
     * Get couleur
     *
     * @return string 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set taille
     *
     * @param string $taille
     * @return Smartphone
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    
        return $this;
    }

    /**
     * Get taille
     *
     * @return string 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Smartphone
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function modifier()
    {
        return $this->getId();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function supprimer()
    {
        return $this->getId();
    }
}
