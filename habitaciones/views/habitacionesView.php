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
            <div class="row mt-3">
                <div class="col-lg-4 mt-3">
                    <span>Hotel:</span>
                    <select id="idHotel"class="form-control mt-2" onchange="traerHabitacionesXIdHotel();;">
                        <option value="">Seleccione..</option>
                      <?php
                        foreach($hoteles as $hotel)
                        {
                            echo '<option value="'.$hotel['id'].'">'.$hotel['descripcion'].'</option>';
                        }
                      ?>
                    </select>
                </div>
            </div>
        </div>
        <?php
    }
    public function traerHabitacionesXIdHotel($idHotel)
    {
        $habitaciones =   $this->habitacionModel->traerHabitacionesXIdHotel($idHotel); 
        ?>
        <div>
          
                    <select id="idHotel"class="form-control mt-2" onchange="traerHabitacionesXIdHotel();;">
                        <option value="">Seleccione..</option>
                      <?php
                        foreach($habitaciones as $habitacion)
                        {
                            echo '<button>'.$habitacion['Decripcion'].'</button>';
                        }
                      ?>
                    </select>
             
        </div>
        <?php
    }


}