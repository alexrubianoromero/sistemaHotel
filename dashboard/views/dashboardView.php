<?php
date_default_timezone_set('Europe/Madrid');
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
// require_once($ruta.'/grupos/views/gruposView.php');
require_once($ruta.'/gestiones/models/GestionModel.php');
require_once($ruta.'/gestiones/views/gestionesView.php');
require_once($ruta.'/hoteles/models/HotelModel.php');
require_once($ruta.'/habitaciones/models/HabitacionModel.php');

class dashboardView{
    // protected $vistaGrupos;
    protected $gestionModel;
    protected $hotelModel;
    protected $habitacionModel;
    protected $gestionView;

    public function __construct()
    {
        // $this->vistaGrupos = new gruposView();
        $this->gestionModel = new GestionModel();
        $this->hotelModel = new HotelModel();
        $this->habitacionModel = new HabitacionModel();
        $this->gestionView = new gestionesView();
        // echo 'dashboard view';

    }



    public function pantallaInicial3()
    {
        ?>
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Tres Columnas con la Misma Altura</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
              
            </head>
            <body class="container mt-3">
               <div id="div_principal_dashboard" class="mt-3">
                    <div id="div_botones mt-3">
                        <button class="btn btn-primary"  
                            data-bs-toggle="modal" 
                            data-bs-target="#modalHabitacion"
                            onclick="formuNuevaHabitacion();"
                        >Nueva Habitacion</button>
                        <button class="btn btn-primary"  
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            onclick="formuNuevaGestion()"
                        >Nueva Gestion</button>
                    </div>
                    <div id="div_resultados_dashboard" class="mt-3">
                            <?php  
                                // $this->mostrarGestiones();  
                                 $this->gestionView->mostrarGestiones();
                            ?>
                    </div>
               </div>
               <?php  $this->modalGestion(); ?>
               <?php  $this->modalHabitacion(); ?>
            </body>
            </html>
            <script src="../dashboard/js/dashboard.js"></script>
            <script src="../habitaciones/js/habitaciones.js"></script>
            <script src="../gestiones/js/gestiones.js"></script>
        <?php
    }

   
    public function modalGestion()
    {
        ?>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Gestiones</h1>
                    <button  onclick="mostrarGestiones();" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalBodyGestion">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="mostrarGestiones();">Close</button>
                    <!-- <button type="button" class="btn btn-primary" onclick="grabarGestion();">Grabar Gestion</button> -->
                </div>
                </div>
            </div>
            </div>
        <?php
    }
    public function modalHabitacion()
    {
        ?>
          <div class="modal fade" id="modalHabitacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Habitaciones</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalBodyHabitacion">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                    <button type="button" class="btn btn-primary" onclick="grabarHabitacion();">Grabar Habitacion</button>
                </div>
                </div>
            </div>
            </div>
        <?php
    }

}
?>