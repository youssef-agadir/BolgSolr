<?php

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Sdz\BlogBundle\Entity\Categorie
 *@ORM\Table()
 *@ORM\Entity(repositoryClass="Sdz\BlogBundle\Entity\CategorieRepository")
 */

 class Categorie
 {

 	
	 /**
	 *@var integer $id
     *
	 *@ORM\Column(name="id" ,type="integer")
     *@ORM\Id
	 *@ORM\GeneratedValue(strategy="AUTO")
	 */
	 private $id;

	 /**
	 * @var string $nom
	 *
	 *@ORM\Column(name="nom" ,type="string")
	 */
	 private $nom;

 
    /**
     * Set id
     *
     * @param integer $id
     * @return Categorie
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set nom
     *
     * @param string $nom
     * @return Categorie
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
}
