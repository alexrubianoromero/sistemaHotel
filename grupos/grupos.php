<?php
$ruta = dirname(dirname(__FILE__));
// die('llego a opciones'.$ruta);
require_once($ruta.'/grupos/controllers/gruposController.php');
$controller = new opcionesController();


?>