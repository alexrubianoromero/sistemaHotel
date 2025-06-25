<?php
$ruta = dirname(dirname(__FILE__));
// die('llego a opciones'.$ruta);
require_once($ruta.'/opciones/controllers/opcionesController.php');
$controller = new opcionesController();


?>