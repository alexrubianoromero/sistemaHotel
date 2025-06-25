<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/habitaciones/views/habitacionesView.php');

class habitacionesController
{
    protected $view;

    public function __construct()
    {
        // session_start();
        $this->view = new habitacionesView();
        // if(!isset($_SESSION['id_usuario']))
        // {
        //     echo 'No hay sesion valida ';
        // }
        if(isset($_REQUEST['opcion'])=='formuNuevaHabitacion')
        {
            $this->view->formuNuevaHabitacion();
        }
        if(isset($_REQUEST['opcion'])=='traerHabitacionesXIdHotel')
        {
            $this->view->traerHabitacionesXIdHotel($_REQUEST['idHotel']);
        }
    }
}




?>