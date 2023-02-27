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
    public function insertData($nombre, $email, $password) {
        // Crear consulta para insertar datos
        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
        // Preparar consulta
        $stmt = $this->con->prepare($sql);
        // Enlazar parámetros
        $stmt->bind_param("2", $nombre, $email, $password,"2023-02-25","1");
        // Ejecutar consulta
        $stmt->execute();
      }


}