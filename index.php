<?php
// start session;
session_start();
//  Include Config
require('config.php');

require('classes/message.php');
require('classes/bootstrap.php');
require('classes/controller.php');
require('classes/model.php');


require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');

require('views/header.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}

?>