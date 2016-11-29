<?php

namespace aplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * galeria
 *
 * @ORM\Table(name="galeria")
 * @ORM\Entity(repositoryClass="aplicationBundle\Repository\galeriaRepository")
 */
class galeria
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	/**
    * @ORM\ManyToOne(targetEntity="uzytkownicy" ,inversedBy="galeria",cascade={"persist"}))
     
     */
	 protected $uzytkownicy;
	

    /**
     * @var string
     *
     * @ORM\Column(name="users", type="string", length=155)
     */
    private $users;

    /**
     * @var string
     *
     * @ORM\Column(name="opis", type="string", length=155)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="komentarz", type="text")
     */
    private $komentarz;

    /**
     * @var string
     *
     * @ORM\Column(name="imgUrls", type="string", length=155)
     */
    private $imgUrls;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetimetz")
     */
    private $data;


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
     * Set users
     *
     * @param string $users
     * @return galeria
     */
    public function setUsers($users)
    {
        $this->users = $users;
    
        return $this;
    }

    /**
     * Get users
     *
     * @return string 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set opis
     *
     * @param string $opis
     * @return galeria
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;
    
        return $this;
    }

    /**
     * Get opis
     *
     * @return string 
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set komentarz
     *
     * @param string $komentarz
     * @return galeria
     */
    public function setKomentarz($komentarz)
    {
        $this->komentarz = $komentarz;
    
        return $this;
    }

    /**
     * Get komentarz
     *
     * @return string 
     */
    public function getKomentarz()
    {
        return $this->komentarz;
    }

    /**
     * Set imgUrls
     *
     * @param string $imgUrls
     * @return galeria
     */
    public function setImgUrls($imgUrls)
    {
        $this->imgUrls = $imgUrls;
    
        return $this;
    }

    /**
     * Get imgUrls
     *
     * @return string 
     */
    public function getImgUrls()
    {
        return $this->imgUrls;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return galeria
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set uzytkownicy
     *
     * @param \aplicationBundle\Entity\uzytkownicy $uzytkownicy
     * @return galeria
     */
    public function setUzytkownicy(\aplicationBundle\Entity\uzytkownicy $uzytkownicy = null)
    {
        $this->uzytkownicy = $uzytkownicy;
    
        return $this;
    }

    /**
     * Get uzytkownicy
     *
     * @return \aplicationBundle\Entity\uzytkownicy 
     */
    public function getUzytkownicy()
    {
        return $this->uzytkownicy;
    }
}
