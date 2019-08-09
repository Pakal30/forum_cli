<?php
require_once("ClientRest.php");
require_once(__DIR__ .'/../const/URL_CONST.php');
require_once("ClientRestForum.php");


class ClientRestForumImp implements ClientRestForum 
{
    private $clientRest;

    public function __construct($clientRest)
    {
        $this->clientRest=$clientRest;
    }

    public function createForum($name){
        //create url to create a forum with post
        $this->clientRest->setUrl(URL_BASE."forums/");
        // set the parameter $name
        $this->clienRest->post(array("nom"=>$name));
        return $res;
    }

      //Read list of topic of a forum name $name
      public function readForum($name)
      {
           //create url to create a forum with post
        $this->clientRest->setUrl(URL_BASE."forums/");
        // set the parameter $name
        return $this->clientRest->get(array("nom"=>$name));
      }

      //Read the flow of a topic
      public function readFlowOfTopic($nameForum,$nameTopic)
      {
         //create url to create a forum with post
         $this->clientRest->setUrl(URL_BASE."sujets/");
         // set the parameter $name
         return $this->clientRest->get(array("nom"=>$name,"sujet_titre"=>$nameTopic));
      }
  
      //Add a post to a topic
      public function addPost($nameForum,$nameTopic,$text)
      {
          //to do
      }
      //Add a topic
      public function createTopic($namForum,$nameTopic)
      {
        //To do 
      }

}