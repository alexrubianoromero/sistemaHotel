<?php

$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/opciones/views/opcionesView.php');


class opcionesController
{
    protected $view;
    public function __construct()
    {
        // echo 'controlador de opciones';
        $this->view = new opcionesView();
        $this->view->menuOpciones();
        

    }
}


?>