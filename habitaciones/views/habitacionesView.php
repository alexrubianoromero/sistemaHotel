<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
// require_once($ruta.'/grupos/views/gruposView.php');
require_once($ruta.'/hoteles/models/HotelModel.php');
require_once($ruta.'/habitaciones/models/HabitacionModel.php');
require_once($ruta.'/itemsChecklist/models/ItemChecklistModel.php');

class habitacionesView
{
    protected $hotelModel;
    protected $habitacionModel;
    protected $itemCheclistModel;

    public function __construct()
    {
        $this->hotelModel = new HotelModel();
        $this->habitacionModel = new HabitacionModel();
        $this->itemCheclistModel = new ItemChecklistModelModel();
    //     // echo 'dashboard view';

    }

    public function formuNuevaHabitacion()
    {
        $hoteles =   $this->hotelModel->traerHoteles(); 
        ?>
        <div>
            <label for="">Nueva Habitacion</label>
            <div class="row mt-2">
                <div class="">
                    <span>Hotel:</span>
                    <select id="idHotel"class="form-control mt-2"  onchange="traerHabitacionesXIdHotel();">
                        <option value="">Seleccione...</option>
                      <?php
                        foreach($hoteles as $hotel)
                        {
                            echo '<option    value="'.$hotel['id'].'">'.$hotel['descripcion'].'</option>';
                        }
                      ?>
                    </select>
                </div>
                <div class="mt-2" id="div_ahabitaciones_existentes">

                </div>
                <div class="mt-3">
                    <span>Nombre Habitacion Nueva</span>
                    <input class="form-control" type="text" id="descripcion">
                </div>
            </div>
        </div>
        <?php
    }


    public function traerHabitacionesXIdHotel($idHotel)
    {
        echo '<div>'; 
        echo '<table class="table">';
        $habitaciones =   $this->habitacionModel->traerHabitacionesXIdHotel($idHotel); 
        foreach($habitaciones as $habitacion)
        {
            // echo '<option value ="'.$habitacion['id'].'">'.$habitacion['descripcion'].'</option>';
            echo '<tr>'; 
            echo '<td style="color:blue;">'.$habitacion['descripcion'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    }
    public function selectHabitacionesXIdHotel($idHotel)
    {
       
        $habitaciones =   $this->habitacionModel->traerHabitacionesXIdHotel($idHotel); 
        echo '<option value ="">Seleccione...</option>';
        foreach($habitaciones as $habitacion)
        {
            echo '<option value ="'.$habitacion['id'].'" >'.$habitacion['descripcion'].'</option>';
        }

    }

    public function muestreListadoCheckList()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <?php
            header('Content-Type: text/html; charset=UTF-8');

            $itemsCheckList =  $this->itemCheclistModel->traerItemsCheckList();
            echo '<table class="table table-striped">'; 
            foreach($itemsCheckList as $item)
            {
                echo '<tr>';
                echo '<td>';
                echo '<input type="checkbox" id="'.$item['id'].'">';
                echo '</td>'; 
                echo '<td>'.$item['descripcion'].'</td>'; 
                echo '</tr>';
            }
            echo '</table>';
          ?>  
        </body>
        </html>
        <?php
    }


}