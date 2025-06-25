<?php

$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/gestiones/views/gestionesView.php');
require_once($ruta.'/gestiones/models/GestionModel.php');
// require_once($ruta.'/grupos/models/GrupoModel.php');


class gestionesController
{
    protected $view;
    protected $GestionModel;
    // protected $model;
    public function __construct()
    {
        // echo 'controlador de opciones';
        $this->view = new gestionesView();
        $this->GestionModel = new GestionModel();
        // $this->view->menuOpcionesGrupos();
        if($_REQUEST['opcion']=='formuNuevaGestion')
        {
            $this->formuNuevaGestion();
        }
        if($_REQUEST['opcion']=='mostrarGestiones')
        {
            $this->view->mostrarGestiones();
        }
        if($_REQUEST['opcion']=='grabarGestion')
        {
            $this->GestionModel->grabarGestion($_REQUEST);
            echo 'Gestion Grabada';
        }
        

    }

    public function formuNuevaGestion()
    {
        $this->view->formuNuevaGestion();
    }
   

    public function traerGrupos()
    {
        // $grupos = $this->model->traerGrupos();
    }

    
}


?>