<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
// require_once($ruta.'/grupos/views/gruposView.php');
require_once($ruta.'/hoteles/models/HotelModel.php');
require_once($ruta.'/habitaciones/models/HabitacionModel.php');

class habitacionesView
{
    protected $hotelModel;
    protected $habitacionModel;
    // protected $gestionModel;

    public function __construct()
    {
        $this->hotelModel = new HotelModel();
        $this->habitacionModel = new HabitacionModel();
    //     $this->gestionModel = new GestionModel();
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


}