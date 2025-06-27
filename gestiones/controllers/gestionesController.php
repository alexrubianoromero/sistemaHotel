<?php

$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/gestiones/views/gestionesView.php');
require_once($ruta.'/gestiones/models/GestionModel.php');
require_once($ruta.'/itemsChecklist/models/ItemChecklistModel.php');


class gestionesController
{
    protected $view;
    protected $GestionModel;
    protected $itemCheclistModel;

    public function __construct()
    {
        // echo 'controlador de opciones';
        $this->view = new gestionesView();
        $this->GestionModel = new GestionModel();
        $this->itemCheclistModel = new ItemChecklistModelModel();
        // $this->view->menuOpcionesGrupos();
        if($_REQUEST['opcion']=='actualizarestadoItemgestion')
        {
            $this->GestionModel->actualizarItemGestion($_REQUEST); 

        }
        if($_REQUEST['opcion']=='formuNuevaGestion')
        {
            $this->formuNuevaGestion();
        }
        if($_REQUEST['opcion']=='mostrarGestiones')
        {
            $this->view->mostrarGestiones();
        }
        if($_REQUEST['opcion']=='muestreInfoGestion')
        {
            $this->view->muestreInfoGestion($_REQUEST['idGestion']);
        }
        // if($_REQUEST['opcion']=='muestreInfoGestion')
        // {
        //     $this->view->muestreListadoCheckListXGestion($_REQUEST['idGestion']);
        // }
        if($_REQUEST['opcion']=='grabarGestion')
        {
            $idGestion = $this->GestionModel->grabarGestion($_REQUEST);
            // die($idMax);
            $items = $this->itemCheclistModel->traerItemsCheckList();
            $this->GestionModel->crearChecklistHabitacion($idGestion,$_REQUEST['idHabitacion'],$items);
            $this->view->muestreInfoGestion($idGestion);
            // echo 'Gestion Grabada';

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