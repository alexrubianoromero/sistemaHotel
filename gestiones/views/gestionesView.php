<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/gestiones/models/GestionModel.php');
require_once($ruta.'/hoteles/models/HotelModel.php');
require_once($ruta.'/habitaciones/models/HabitacionModel.php');
require_once($ruta.'/itemsChecklist/models/ItemChecklistModel.php');
// die($ruta); 
// require_once($ruta.'/grupos/views/gruposView.php');
// require_once($ruta.'/gestiones/models/GestionModel.php');

class gestionesView{
     protected $gestionModel;
    protected $hotelModel;
    protected $habitacionModel;
    protected $itemChecklistModel;

    public function __construct()
    {
        $this->gestionModel = new GestionModel();
        $this->hotelModel = new HotelModel();
        $this->habitacionModel = new HabitacionModel();
        $this->itemChecklistModel = new ItemChecklistModelModel();
        // echo 'dashboard view';

    }


     public function mostrarGestiones($filtroFecha=0)
    {
         $gestiones = $this->gestionModel->traerGestiones();
        ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Hotel</th>
                        <th>Habitacion</th>
                        <th>Ver</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($gestiones as $gestion)
                        {
                             $infoHabitacion = $this->habitacionModel->traerHabitacionXId($gestion['idHabitacion']);
                             $infoHotel =  $this->hotelModel->traerHotelXId($infoHabitacion['idHotel']); 
                             // echo '<pre>'; print_r($infoHabitacion);echo '</pre>';die();
                            echo '<tr>';
                            echo '<td>'.$gestion['id'].'</td>';
                            echo '<td>'.$gestion['fecha'].'</td>';
                            echo '<td>'.$infoHotel['descripcion'].'</td>';
                            echo '<td>'.$infoHabitacion['descripcion'].'</td>';
                            echo '<td><button 
                                        class="btn btn-sm btn-primary" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#exampleModal"
                                        onclick="muestreInfoGestion('.$gestion["id"].');">Ver</button></td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
            <?php
     
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



  

    public function muestreInfoGestion($idGestion)
    {
            $infoGestion= $this->gestionModel->traerGestionXId($idGestion);
            $infoHabitacion = $this->habitacionModel->traerHabitacionXId($infoGestion['idHabitacion']);
            // echo '<pre>'; print_r($infoHabitacion);echo '</pre>';die();
            $infoHotel =  $this->hotelModel->traerHotelXId($infoHabitacion['idHotel']); 
            ?>
            <div class="row mt-2">
                <div class="col-lg-4 mt-2">
                    Hotel: <span><?php  echo $infoHotel['descripcion'] ?></label>
                </div>
                <div class="col-lg-4  mt-2">
                    Habitacion: <span><?php  echo $infoHabitacion['descripcion'] ?></label>
                </div>
                <div class="col-lg-4  mt-2">
                    Fecha: <span><?php  echo $infoGestion['fecha'] ?></label>
                </div>
                <?php  $this->muestreListadoCheckListXGestion($idGestion)  ?>
            </div>
            <?php
    }
    

    public function muestreListadoCheckListXGestion($idGestion)
    {
        $itemsXGestion =  $this->gestionModel->traerItemsXGestion($idGestion);
        echo '<div id="div_tabla_list" class="mt-2">'; 
        echo '<table class="table table-striped">'; 
        foreach($itemsXGestion as $item)
        {
            $infoItem = $this->itemChecklistModel->traerItemsCheckListXId($item['IdItem']);
            echo '<tr>';
            echo '<td>';
            if($item['valor']==0)
            {
                echo '<input type="checkbox" id="'.$item['id'].'" name="'.$item['id'].'" onchange="actualizarestadoItemgestion(this);" >';
            }else{
                echo '<input type="checkbox" checked id="'.$item['id'].'" name="'.$item['id'].'" onchange="actualizarestadoItemgestion(this);" >';
    
            }
            echo '</td>'; 
            echo '<td><label for="'.$item['id'].'">'.$infoItem['descripcion'].'</label></td>'; 
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
        
    }
}  




?>