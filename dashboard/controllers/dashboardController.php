<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/dashboard/views/dashboardView.php');

class dashboardController
{
    protected $view;

    public function __construct()
    {
        session_start();
        $this->view = new dashboardView();
        // echo 'controlador dashboard';
        if(!isset($_SESSION['id_usuario']))
        {
            echo 'No hay sesion valida ';
            //redireccionar a index
        }
        if(!isset($_REQUEST['opcion']))
        {
            // echo 'Mostrar dashboard';
            //redireccionar a index
            $this->view->pantallaInicial3();
        }

    }
}




?>