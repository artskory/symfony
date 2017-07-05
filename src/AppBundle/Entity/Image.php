<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Image
 *
 * @Gedmo\Uploadable(filenameGenerator="ALPHANUMERIC", appendNumber=true, maxSize="1500000", allowedTypes="image/png,image/gif,image/jpg")
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 */
class Image
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
     * @var string
     * @Gedmo\UploadableFilePath
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Votre alt doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Votre alt ne peut pas dépasser les {{ limit }} caractères"
     * )
     * 
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;
    
    /**
     *
     * @ORM\Column(name="name", type="string")
     * @gedmo\UploadableFileName
     */
    private $name;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Image
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
     * Set alt
     *
     * @param string $alt
     *
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Image
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    public function baseUrl() {
        return basename($this->url);
    }
}
