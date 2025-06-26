<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/habitaciones/views/habitacionesView.php');
require_once($ruta.'/habitaciones/models/HabitacionModel.php');

class habitacionesController
{
    protected $view;
    protected $model;

    public function __construct()
    {
        // session_start();
        $this->view = new habitacionesView();
        $this->model = new HabitacionModel();
        // if(!isset($_SESSION['id_usuario']))
        // {
        //     echo 'No hay sesion valida ';
        // }

        if($_REQUEST['opcion']=='formuNuevaHabitacion')
        {
            $this->view->formuNuevaHabitacion();
        }


        if($_REQUEST['opcion']=='traerHabitacionesXIdHotel')
        {
            $this->view->traerHabitacionesXIdHotel($_REQUEST['idHotel']);
        }
        if($_REQUEST['opcion']=='selectHabitacionesXIdHotel')
        {
            $this->view->selectHabitacionesXIdHotel($_REQUEST['idHotel']);
        }
        if($_REQUEST['opcion']=='muestreListadoCheckList')
        {
            $this->view->muestreListadoCheckList();
        }
        if($_REQUEST['opcion']=='grabarHabitacion')
        {
            $this->model->grabarHabitacion($_REQUEST);
            echo 'Habitacion Grabada';
        }
    }
}




?>