<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta);
require_once($ruta.'/conexion/Conexion.php');
// die('modelo gestion');
class HotelModel extends Conexion
{
    public function traerHoteles()
    {
        // echo 'traer gestines '; 
        $sql = "select * from hoteles order by id ";
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