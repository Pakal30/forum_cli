<?php
/**
 * Ressource find on :https://www.croes.org/gerald/blog/ecrire-un-client-rest-en-php-23/490/
 */
abstract class ClientRest 
{
    private $pUrl;

    public function setUrl($url)
    {
        $this->pUrl=$url;
        return $this;
    }

    public function getUrl()
    {
        return $this->pUrl;
    }

	public abstract function get ($pParams);

	public abstract function post ($pPostParams);
	
	public abstract function put ($pContent = null, $pGetParams);
	
	public abstract function delete ($pContent = null, $pGetParams);
	
	
}