<?php

interface ClientRestForum 
{
    //Create forum with the name $name
    public function createForum($name);

    //Read list of topic of a forum name $name
    public function readForum($name);

    //Read the flow of a topic
    public function readFlowOfTopic($nameForum,$nameTopic);

    //Add a post to a topic
    public function addPost($nameForum,$nameTopic,$text);

    //Add a topic
    public function createTopic($nameForum,$nameTopic);
}