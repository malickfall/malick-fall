<?php

namespace MF\CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 */
class Competence
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $niveau;

    /**
     * @var \MF\CVBundle\Entity\Category
     */
    private $category;

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
     * Set nom
     *
     * @param string $nom
     * @return Competence
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     * @return Competence
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return integer 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set category
     *
     * @param \MF\CVBundle\Entity\Category $category
     * @return Competence
     */
    public function setCategory(\MF\CVBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \MF\CVBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
