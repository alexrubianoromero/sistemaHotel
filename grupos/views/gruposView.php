<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/grupos/models/GrupoModel.php');

class gruposView
{
    protected $model;

    public function __construct()
    {
            // echo 'controlador de opciones';
        $this->model = new GrupoModel();
    }

    public function menuOpcionesGrupos()
    {
    }
    
    public function mostrarGrupos()
    {
        $grupos =$this->model->traerGrupos(); 
        
        foreach($grupos as $grupo)
        {
             echo '<br>'.$grupo['nombre'];
        } 
     

    }


}


?>