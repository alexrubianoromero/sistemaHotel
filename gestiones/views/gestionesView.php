<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/gestiones/models/GestionModel.php');
// die($ruta); 
// require_once($ruta.'/grupos/views/gruposView.php');
// require_once($ruta.'/gestiones/models/GestionModel.php');

class gestionesView{
     protected $gestionModel;
    // protected $gestionModel;

    public function __construct()
    {
        $this->gestionModel = new GestionModel();
        // $this->gestionModel = new GestionModel();
        // echo 'dashboard view';

    }

    public function formuNuevaGestion()
    {
        // echo 'formu nueva gestion';
        ?>
           <div class="row mt-3">
                <div class="col-lg-12">
                    <label>Observaciones:</label>
                    <textarea class="form-control" id="txtobservacion"></textarea>

                </div>
           </div> 

        <?
    }
    public function formuNuevaGestionAnte()
    {
        // echo 'formu nueva gestion';
        ?>
           <div class="row mt-3">
                <div class="col-lg-12">
                    <label>Observaciones:</label>
                    <textarea class="form-control" id="txtobservacion"></textarea>

                </div>
           </div> 

        <?
    }



     public function mostrarGestiones()
    {
        // echo 'buenas desde gestion';
         $gestiones = $this->gestionModel->traerGestiones();

        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($gestiones as $gestion){
                            echo '<tr>';
                          
                            echo '<td>'.strtoupper($gestion['fecha']).'</td>';
                            echo '<td>'.strtoupper($gestion['observaciones']).'</td>';
                            echo '</tr>';
                        }
                        ?>
                </tbody>
            </table>
            <?php
     
    }


}  




?>