<?php
//importacio de user, pero ho tenim que posarlo a la classe que necesitem (controller), inclode_once()
if(!isset($_SESSION)){
    session_start();
}
include_once("App/config.php");
include_once("App/Router.php");
include_once("App/Models/mascota.php");
include_once("App/Models/User.php");
include_once("App/Core/Controller.php");

$r = new Router();
$r->run();
?>