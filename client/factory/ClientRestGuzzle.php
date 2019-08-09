<?php
require_once(__DIR__ . '/../vendor//nategood/httpful/bootstrap.php');
require (__DIR__ . '/../vendor/autoload.php');
class ClientRestGuzzle extends ClientRest
{
    //operate a get request to rest api
    public function get ($pParams)
    {       
        $client = new GuzzleHttp\Client();

        $res = $client->request('GET', parent::getUrl(), ['headers' => ['Accept' => 'application/json','Content-type' => 'application/json'],
                                               'query'  =>  $pParams  ]);

        if ($res->getStatusCode()<>'200') {
            return $res->getStatusCode();
        }
        else {
            return $res->getBody();
        }
    }
    //operate a post request to rest api
    public function post ($pPostParams)
    {
             
        $client = new GuzzleHttp\Client();

        $res = $client->request('POST', parent::getUrl() , ['headers' => ['Accept' => 'application/json','Content-type' => 'application/json'],
                                               'body'  =>  $pPostParams  ]);

        if ($res->getStatusCode()<>'200') {
            return $res->getStatusCode();
        }
        else {
            return $res->getBody();
        }

    }
    //operate a put request to rest api
    public function put ($pContent = null, $pGetParams)
    {
            //to do 
    }
    //operate a delete request to rest api
    public function delete ($pContent = null, $pGetParams)
    {
            //to do
    }
    
}