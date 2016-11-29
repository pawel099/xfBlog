<?php

namespace aplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * images
 *
 * @ORM\Table(name="images")
 * @ORM\Entity(repositoryClass="aplicationBundle\Repository\imagesRepository")
 */
class images
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
    * @ORM\ManyToOne(targetEntity="uzytkownicy" ,inversedBy="images",cascade={"persist"}))
     
     */
	 protected $uzytkownicy;
	
	
	
	
	
	

    /**
     * @var string
     *
     * @ORM\Column(name="userFields", type="string", length=155)
     */
    private $userFields;

    /**
     * @var string
     *
     * @ORM\Column(name="imgFields", type="string", length=155)
     */
    private $imgFields;

    /**
     * @var string
     *
     * @ORM\Column(name="komentsFields", type="text")
     */
    private $komentsFields;


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
     * Set userFields
     *
     * @param string $userFields
     * @return images
     */
    public function setUserFields($userFields)
    {
        $this->userFields = $userFields;
    
        return $this;
    }

    /**
     * Get userFields
     *
     * @return string 
     */
    public function getUserFields()
    {
        return $this->userFields;
    }

    /**
     * Set imgFields
     *
     * @param string $imgFields
     * @return images
     */
    public function setImgFields($imgFields)
    {
        $this->imgFields = $imgFields;
    
        return $this;
    }

    /**
     * Get imgFields
     *
     * @return string 
     */
    public function getImgFields()
    {
        return $this->imgFields;
    }

    /**
     * Set komentsFields
     *
     * @param string $komentsFields
     * @return images
     */
    public function setKomentsFields($komentsFields)
    {
        $this->komentsFields = $komentsFields;
    
        return $this;
    }

    /**
     * Get komentsFields
     *
     * @return string 
     */
    public function getKomentsFields()
    {
        return $this->komentsFields;
    }

    /**
     * Set uzytkownicy
     *
     * @param \aplicationBundle\Entity\uzytkownicy $uzytkownicy
     * @return images
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
