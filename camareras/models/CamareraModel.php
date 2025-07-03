<?php
date_default_timezone_set('Europe/Madrid');
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta);
require_once($ruta.'/conexion/Conexion.php');
// die('modelo gestion');
class CamareraModel extends Conexion
{
    public function traerCamareras()
    {
        // echo 'traer gestines '; 
        $sql = "select * from camareras order by nombre asc";
        // die($sql);
         $consulta = mysql_query($sql,$this->connectMysql()); 
         $ordenes = $this->get_table_assoc($consulta);
         return $ordenes;
    }
        
    public function traerCamareraXId($id)
    {
        $sql = "select * from camareras where id ='".$id."'     ";
         $consulta = mysql_query($sql,$this->connectMysql()); 
         $ordenes = mysql_fetch_assoc($consulta);
         return $ordenes;
        }

}