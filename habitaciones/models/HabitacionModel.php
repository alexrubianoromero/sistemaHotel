<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta);
require_once($ruta.'/conexion/Conexion.php');
// die('modelo gestion');
class HabitacionModel extends Conexion
{
        public function traerHabitaciones()
        {
        // echo 'traer gestines '; 
        $sql = "select * from habitaciones order by id desc";
        // die($sql);
         $consulta = mysql_query($sql,$this->connectMysql()); 
         $ordenes = $this->get_table_assoc($consulta);
         return $ordenes;
        }
        public function traerHabitacionesXIdHotel($idHotel)
        {
        // echo 'traer gestines '; 
        $sql = "select * from habitaciones where idHotel = '".$idHotel."' order by id desc";
        // die($sql);
         $consulta = mysql_query($sql,$this->connectMysql()); 
         $ordenes = $this->get_table_assoc($consulta);
         return $ordenes;
        }

        // public function grabarGestion($request)
        // {
        //     $sql = "insert into gestiones (observaciones)   values('".$request['observaciones']."')"; 
        //     $consulta = mysql_query($sql,$this->connectMysql()); 
        // }

}



?>