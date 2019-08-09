<?php
class Interpretor 
{
    private $restClientForum;
    private $arrayArg=array();

    public function __construct($arrayArg,$restClientForum)
    {
        $this->restClientForum=$restClientForum;
        $this->arrayArg=$arrayArg;
    }

    public function exec()
    {   //launch command 
        switch ($this->arrayArg[1]) {
            case "creer_forum":
                $res=$this->restClientForum->createForum($this->arrayArg[2]);
                break;
            case "creer_discussion":
                $res=$this->restClientForum->createTopic($this->arrayArg[2],$this->arrayArg[3]);
                break;
            case "ajouter_post":
                $res=$this->restClientForum->addPost($this->arrayArg[2],$this->arrayArg[3],$this->arrayArg[4]);
                break;
            case "lire_liste_de_sujet":
                $res=$this->restClientForum->readForum($this->arrayArg[2]);
                break;
            case "lire_une_discussion":
                $res=$this->restClientForum->readFlowOfTopic($this->arrayArg[2],$this->arrayArg[3]);
                break;
            case "creer_une_discussion":
                $res=$this->restClientForum-> createTopic($this->arrayArg[2],$this->arrayArg[3]);
                break;
            default :
                echo "Manuel : 
                        list command :
                                        php Main.php creer_forum [nomForum]
                                        php Main.php creer_discussion [nomForum,sujetTitre]
                                        php Main.php ajouter_post [nomForum,sujetTitre,textPost]
                                        php Main.php lire_liste_de_sujet [nomForum]
                                        php Main.php lire_une_discussion [nomForum,sujetTitre]
                                        php Main.php creer_une_discussion [nomForum,sujetTitre]";
                break;

        }
        return $res;
    }
}