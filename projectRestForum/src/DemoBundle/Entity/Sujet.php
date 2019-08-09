<?php

namespace DemoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Sujet
 */
class Sujet
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    private $forum;

    private $auteur;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Sujet
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    public function getForum()
    {
        return $this->forum;
    }

    public function setForum(Forum $forum)
    {
        $this->forum = $forum;

        return $this;

    }  
    
    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;

        return $this;

    }
}

