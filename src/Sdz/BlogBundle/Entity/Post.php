<?php

namespace Sdz\BlogBundle\Entity;

use FS\SolrBundle\Doctrine\Annotation as Solr;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sdz\BlogBundle\Entity\Post
 * @Solr\Document(repository="Full\Qualified\Class\Name")
 * @ORM\Entity(repositoryClass="Sdz\BlogBundle\Entity\PostRepository")
 */
class Post
{
	/**
	 * @Solr\Id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */

	private $id;
	/**
	 *
	 * @Solr\Field(type="string")
	 *
	 * @ORM\Column(name="title", type="string", length=255)
	 */
	private $title = '';

	/**
	* 
	* @Solr\Field(type="string")
	*
	* @ORM\Column(name="text", type="text")
	*/
	private $text = '';

	/**
	* @Solr\Field(type="date")
	*
	* @ORM\Column(name="created_at", type="datetime")
	*/
	private $created_at = null;

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
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Post
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
}
