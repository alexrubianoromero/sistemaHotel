<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/conexion/Conexion.php');

class GrupoModel
{
    public function traerGrupos()
    {
        $sql = "select * from grupos ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
         $grupos = $this->get_table_assoc($consulta);
         return $grupos;
    }

}




?>