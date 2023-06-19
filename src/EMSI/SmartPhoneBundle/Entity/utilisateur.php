<?php

namespace EMSI\SmartPhoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class utilisateur
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
     * @ORM\Column(name="login", type="string", length=30)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mtp", type="string", length=10)
     */
    private $mtp;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=30)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="role")
     *
     */
    private $role;
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
     * Set login
     *
     * @param string $login
     * @return utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mtp
     *
     * @param string $mtp
     * @return utilisateur
     */
    public function setMtp($mtp)
    {
        $this->mtp = $mtp;
    
        return $this;
    }

    /**
     * Get mtp
     *
     * @return string 
     */
    public function getMtp()
    {
        return $this->mtp;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

}
