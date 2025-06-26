<?php
date_default_timezone_set('Europe/Madrid');
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
            $fechaActual = new DateTime();
            $fechaParaMySQL = $fechaActual->format('Y-m-d H:i:s');
            $sql = "insert into gestiones (idHabitacion, fecha)   
            values('".$request['idHabitacion']."','".$fechaParaMySQL."'
            
            )"; 
            $consulta = mysql_query($sql,$this->connectMysql()); 
            $maxId = $this->traerMaxIdGestion();
            return $maxId;
        }
        
        public function crearChecklistHabitacion($idGestion,$idHabitacion,$items)
        {
            foreach($items as $item)
            {
                $sql = "insert into itemsXHabitacion (idGestion,idhabitacion,idItem)
                values('".$idGestion."','".$idHabitacion."','".$item['id']."')
                ";
                $consulta = mysql_query($sql,$this->connectMysql()); 
            }
        }  
        
        public function traerMaxIdGestion()
        {
            $sql = "select max(id) as maxId from gestiones";
            $consulta = mysql_query($sql,$this->connectMysql()); 
            $respu = mysql_fetch_assoc($consulta);
            return $respu['maxId'];
        }
        
        public function traerItemsXGestion($idGestion)
        {
            $sql = "select * from itemsXHabitacion  where idGestion = '".$idGestion."'   order by id ";
            $consulta = mysql_query($sql,$this->connectMysql()); 
            $itemsGestion = $this->get_table_assoc($consulta);
            return $itemsGestion;
        }
        
        public function actualizarItemGestion($request)
        {
            $sql = "update itemsXHabitacion   
            set   valor = '".$request['valor']."'
            where id = '".$request['idItemGestion']."'
            "; 
            $consulta = mysql_query($sql,$this->connectMysql()); 
            //   die($sql ); 
        }
    }



?>