<?php
require_once("ClientRest.php");
require_once("ClientRestForumImp.php");
//require_once("ClientRestHttpFul.php");
require_once("ClientRestGuzzle.php");

class MainFactory
{ 
        /**
         * @var Singleton
         * @access private
         * @static
         */
         private static $_instance = null;

         private $clientRestForum=null;
       
         /**
          * Constructeur de la classe
          *
          * @param void
          * @return void
          */
         private function __construct() {  
             $this->clientRestForum = new ClientRestForumImp(new ClientRestGuzzle());
         }
       
         /**
          * Méthode qui crée l'unique instance de la classe
          * si elle n'existe pas encore puis la retourne.
          *
          * @param void
          * @return MainFactory
          */
         public static function getInstance() {
       
           if(is_null(self::$_instance)) {
             self::$_instance = new MainFactory();  
           }
       
           return self::$_instance;
         }

         public function getClientRestForum() 
         {
             return $this->clientRestForum;
         }
}       
?>
