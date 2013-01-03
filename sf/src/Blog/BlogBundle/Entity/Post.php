<?php

namespace Blog\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog\BlogBundle\Entity\Post
 */
class Post
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var \DateTime $entered
     */
    private $entered;


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
     * Set name
     *
     * @param string $name
     * @return Post
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

    /**
     * Set entered
     *
     * @param \DateTime $entered
     * @return Post
     */
    public function setEntered($entered)
    {
        $this->entered = $entered;
    
        return $this;
    }

    /**
     * Get entered
     *
     * @return \DateTime 
     */
    public function getEntered()
    {
        return $this->entered;
    }
    /**
     * @var string $fname
     */
    private $fname;

    /**
     * @var string $lname
     */
    private $lname;


    /**
     * Set fname
     *
     * @param string $fname
     * @return Post
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    
        return $this;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     * @return Post
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    
        return $this;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getLname()
    {
        return $this->lname;
    }
    /**
     * @var string $comment
     */
    private $comment;


    /**
     * Set comment
     *
     * @param string $comment
     * @return Post
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
}