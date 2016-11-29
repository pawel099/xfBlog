<?php

namespace aplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * uzytkownicy
 *
 * @ORM\Table(name="uzytkownicy")
 * @ORM\Entity(repositoryClass="aplicationBundle\Repository\uzytkownicyRepository")
 */
class uzytkownicy
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
    * @ORM\OneToMany(targetEntity="galeria" ,mappedBy="uzytkownicy")
     
     */
	 private $galerie;
	
	

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=155, unique=true)
     */
    private $nazwa;


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
     * Set nazwa
     *
     * @param string $nazwa
     * @return uzytkownicy
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;
    
        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string 
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->galerie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add galerie
     *
     * @param \aplicationBundle\Entity\galeria $galerie
     * @return uzytkownicy
     */
    public function addGalerie(\aplicationBundle\Entity\galeria $galerie)
    {
        $this->galerie[] = $galerie;
    
        return $this;
    }

    /**
     * Remove galerie
     *
     * @param \aplicationBundle\Entity\galeria $galerie
     */
    public function removeGalerie(\aplicationBundle\Entity\galeria $galerie)
    {
        $this->galerie->removeElement($galerie);
    }

    /**
     * Get galerie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGalerie()
    {
        return $this->galerie;
    }
}
