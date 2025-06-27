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
        public function traerHabitacionXId($idHabitacion)
        {
        // echo 'traer gestines '; 
         $sql = "select * from habitaciones where id = '".$idHabitacion."' ";
        // die($sql);
         $consulta = mysql_query($sql,$this->connectMysql()); 
         $ordenes = mysql_fetch_assoc($consulta);
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

        public function grabarHabitacion($request)
        {
            $sql = "insert into habitaciones (idHotel,descripcion)   values('".$request['idHotel']."','".$request['descripcion']."')"; 
        //     die($sql);
            $consulta = mysql_query($sql,$this->connectMysql()); 
        }

}



?>