<?php
$ruta = dirname(dirname(__FILE__));
// die('login: '.$ruta);
require_once($ruta.'/views/loginView.php');
require_once($ruta.'/models/VariosModel.php');

class loginController
{
    protected $loguinView;
    protected $variosModel;

     public function __construct()
    {
        $this->loguinView = new loginView();
        $this->variosModel = new VariosModel();
         if(!isset($_REQUEST['opcion'])){
             $this->pantallaLogueo();
          }
           else{

               if($_REQUEST['opcion']=='verificarCredenciales'){
                    $this->verificarCredenciales($_REQUEST); 
                }
            }
    }

    public function pantallaLogueo()
    {
        $this->loguinView->pantallaLogueo();
    }

     public function verificarCredenciales($request)
    {
        // die('llego a verificar credenciales '); 
        $respu = $this->variosModel->verificarCredencialesTecnicos($request);
        //   echo '<pre>'; print_r($respu);   echo '</pre>';die();
        if($respu['valida']==1)
        {
            session_start();
            $_SESSION['login'] = $respu['datos']['login'];
            $_SESSION['id_usuario'] = $respu['datos']['id_usuario'];
            $_SESSION['id_perfil'] = $respu['datos']['id_perfil'];
        }
        echo  json_encode($respu);
        exit();
    }



}    