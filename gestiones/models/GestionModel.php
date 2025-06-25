<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta);
require_once($ruta.'/conexion/Conexion.php');
// die('modelo gestion');
class GestionModel extends Conexion
{
    public function traerGestiones()
    {
        // echo 'traer gestines '; 
        $sql = "select * from gestiones order by id desc";
        // die($sql);
         $consulta = mysql_query($sql,$this->connectMysql()); 
         $ordenes = $this->get_table_assoc($consulta);
         return $ordenes;
        }
        
        public function grabarGestion($request)
        {
            $sql = "insert into gestiones (observaciones)   values('".$request['observaciones']."')"; 
            $consulta = mysql_query($sql,$this->connectMysql()); 
        }

}



?>