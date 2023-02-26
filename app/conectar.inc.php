<?php

class conectar {

    private $con;

	public function getCon() {
		return $this->con;
	}
    public function __construct() {
        
    }
    public function ConectarBD(){
        include_once 'config.inc.php';
        $this->con=new mysqli("$nombre_servidor","$nombre_usuario","$password","$nombre_base_datos");
        
        if($this->con->connect_errno){
            print "No es posible conectarse a la Base de Datos";
            exit;
        }                       
    }


}