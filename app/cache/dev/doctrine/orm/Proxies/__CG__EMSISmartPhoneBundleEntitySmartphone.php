<?php

namespace Proxies\__CG__\EMSI\SmartPhoneBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Smartphone extends \EMSI\SmartPhoneBundle\Entity\Smartphone implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setMarque($marque)
    {
        $this->__load();
        return parent::setMarque($marque);
    }

    public function getMarque()
    {
        $this->__load();
        return parent::getMarque();
    }

    public function setModele($modele)
    {
        $this->__load();
        return parent::setModele($modele);
    }

    public function getModele()
    {
        $this->__load();
        return parent::getModele();
    }

    public function setCouleur($couleur)
    {
        $this->__load();
        return parent::setCouleur($couleur);
    }

    public function getCouleur()
    {
        $this->__load();
        return parent::getCouleur();
    }

    public function setTaille($taille)
    {
        $this->__load();
        return parent::setTaille($taille);
    }

    public function getTaille()
    {
        $this->__load();
        return parent::getTaille();
    }

    public function setPrix($prix)
    {
        $this->__load();
        return parent::setPrix($prix);
    }

    public function getPrix()
    {
        $this->__load();
        return parent::getPrix();
    }

    public function modifier()
    {
        $this->__load();
        return parent::modifier();
    }

    public function supprimer()
    {
        $this->__load();
        return parent::supprimer();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'marque', 'modele', 'couleur', 'taille', 'prix');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}