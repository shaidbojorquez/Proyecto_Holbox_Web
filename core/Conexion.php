<?php

class Conexion{
    
    private $conexion_db;

    public function __construct(){
        require('config/variables_BD.php');
        $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
        if($this->conexion_db->connect_errno){
            echo "Fallo al conectar a MySQL: "; //.$this->conexion_db->connect_error;
            return;
        }
        $this->conexion_db->set_charset(DB_CHARSET);
    }

    public function get_conexion(){
        return $this->conexion_db;
    }

    public function close_conexion(){
        $this->conexion_db->close();
    }
}
?>