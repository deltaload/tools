<?php

namespace Blog\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog\BlogBundle\Entity\Post
 *
 * @ORM\Table(name="Post")
 * @ORM\Entity
 */
class Post
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $fname
     *
     * @ORM\Column(name="fname", type="string", length=255, nullable=false)
     */
    private $fname;

    /**
     * @var string $lname
     *
     * @ORM\Column(name="lname", type="string", length=255, nullable=false)
     */
    private $lname;

    /**
     * @var \DateTime $entered
     *
     * @ORM\Column(name="entered", type="datetime", nullable=false)
     */
    private $entered;

    /**
     * @var string $comment
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;


}
