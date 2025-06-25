<?php
$ruta = dirname(dirname(__FILE__));
// die($ruta); 
require_once($ruta.'/dashboard/controllers/dashboardController.php');
$dashboardController = new dashboardController();

?>