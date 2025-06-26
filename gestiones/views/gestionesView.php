<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/gestiones/models/GestionModel.php');
require_once($ruta.'/hoteles/models/HotelModel.php');
require_once($ruta.'/itemsChecklist/models/ItemChecklistModel.php');
// die($ruta); 
// require_once($ruta.'/grupos/views/gruposView.php');
// require_once($ruta.'/gestiones/models/GestionModel.php');

class gestionesView{
     protected $gestionModel;
    protected $hotelModel;
    protected $itemChecklistModel;

    public function __construct()
    {
        $this->gestionModel = new GestionModel();
        $this->hotelModel = new HotelModel();
          $this->itemChecklistModel = new ItemChecklistModelModel();
        // echo 'dashboard view';

    }

    public function formuNuevaGestion()
    {
        // echo 'formu nueva gestion';
        $hoteles = $this->hotelModel->traerHoteles();
        ?>
           <div class="row ">
                <div class="col-lg-4 mt-2">
                    <label for="">Hotel:</label>
                    <select id="idHotel" class="form-control" onchange="selectHabitacionesXIdHotel();" >
                        <option value="">Seleccione...</option>
                        <?php
                        foreach($hoteles as $hotel)
                        {
                            echo '<option value ="'.$hotel['id'].'">'.$hotel['descripcion'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="col lg-5 mt-2">
                    <label>Habitacion</label>
                    <select id="idHabitacion" class="form-control"  ">
                    </select>
                </div>
                <div class="col-lg-12 mt-2" id="div_muestre_checklist">

                </div>
                <!-- <div class="col-lg-12">
                    <label>Observaciones:</label>
                    <textarea class="form-control" id="txtobservacion"></textarea>

                </div> -->
           </div> 
           <div class="mt-3">
                <button type="button" class="btn btn-primary" onclick="grabarGestion();">Crear Gestion</button>
           </div>

        <?php
        // onchange="muestreListadoCheckList();
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

    public function muestreListadoCheckListXGestion($idGestion)
    {

            $itemsXGestion =  $this->gestionModel->traerItemsXGestion($idGestion);
            // echo '<pre>'; print_r($itemsXGestion);echo '</pre>';die();
            echo '<div id="div_tabla_list">'; 
            echo '<table class="table table-striped">'; 
            foreach($itemsXGestion as $item)
            {
                $infoItem = $this->itemChecklistModel->traerItemsCheckListXId($item['IdItem']);
                echo '<tr>';
                echo '<td>';
                echo '<input type="checkbox" id="'.$item['id'].'" name="'.$item['id'].'" onchange="actualizarestadoItemgestion(this);" >';
                echo '</td>'; 
                echo '<td>'.$infoItem['descripcion'].'</td>'; 
                echo '</tr>';
            }
            echo '</table>';
            echo '</div>';
    }

        // onkeyup="actualizarestadoItemgestion('.$item['id'].');"

}  




?>