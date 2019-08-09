<?php

namespace DemoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Forum
 */
class Forum
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Forum
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

