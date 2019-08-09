<?php
require_once("factory/MainFactory.php");
require_once("utils/Tools.php");
require_once("command/interpretor.php");
require_once("view/View.php");
/* Create an object MainFactory to use dependency injection */
$mainFactory = MainFactory::getInstance();

// init object from MainFactory
$restClientForum= $mainFactory->getClientRestForum();

// Validate list command
if (Tools::isValid($_SERVER['argv'])) 
{
// Init interpretor command
$interpretor = new Interpretor($_SERVER['argv'],$restClientForum);

// execute command
$result=$interpretor->exec();
// View the result
$view= new View($result);
$view->run();
}
else 
{
    // view error page;
}

?>