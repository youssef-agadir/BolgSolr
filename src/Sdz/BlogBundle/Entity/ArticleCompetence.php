<?php
// src/Sdz/BlogBundle/Entity/ArticleCompetence.php

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ArticleCompetence
{
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Sdz\BlogBundle\Entity\Article")
   */
  private $article;

  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Sdz\BlogBundle\Entity\Competence")
   */
  private $competence;

  /**
   * @ORM\Column()
   */
  private $niveau; // Ici j'ai un attribut de relation « niveau »

  // … vous pouvez ajouter d'autres attributs bien entendu
  // Getter et setter pour l'entité Competence
  public function setCompetence(\Sdz\BlogBundle\Entity\Competence $competence)
  {
    $this->competence = $competence;
  }
  public function getCompetence()
  {
    return $this->competence;
  }

  // On définit le getter/setter de l'attribut « niveau »
  public function setNiveau($niveau)
  {
    $this->niveau = $niveau;
  }
  public function getNiveau()
  {
    return $this->niveau;
  }

    /**
     * Set article
     *
     * @param \Sdz\BlogBundle\Entity\Article $article
     * @return ArticleCompetence
     */
    public function setArticle(\Sdz\BlogBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Sdz\BlogBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
