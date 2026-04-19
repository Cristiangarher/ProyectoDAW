<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'ferreteríaprueba';
    private $username = 'root';
    private $password = '';
    public $conexion;

    public function __construct() {
        $this->conexion = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);

        if (!$this->conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }
    }
}
?>