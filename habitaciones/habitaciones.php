<?php
$ruta = dirname(dirname(__FILE__));
// die('llego a opciones'.$ruta);
require_once($ruta.'/habitaciones/controllers/habitacionesController.php');
$habitacionesController = new habitacionesController();


?>