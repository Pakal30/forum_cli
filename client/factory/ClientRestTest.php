<?php

class ClientRestTest extends ClientRest
{

    public function get ($url,$pParams)
    {       
        return "{ 'forum' : 'nom' => 'info', 'sujet': 'sujet_titre'=> 'meteo juillet'}";
    }

    public function post ($url,$pPostParams)
    {


    }
	
    public function put ($url,$pContent = null, $pGetParams)
    {

    }
	
    public function delete ($url,$pContent = null, $pGetParams)
    {

    }
    
}