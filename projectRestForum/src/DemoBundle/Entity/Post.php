<?php

namespace DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Post
{
    private $id;

    /**
     * @Assert\NotBlank()
     */
    private $titre;

    /**
     * @Assert\NotBlank()
     */

    private $sujet;

    private $auteur;

    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getSujet()
    {
        return $this->sujet;
    }

    public function setSujet(Sujet $sujet)
    {
        $this->sujet = $sujet;

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
