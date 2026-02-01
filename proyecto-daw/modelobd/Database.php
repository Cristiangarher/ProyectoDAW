<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'ferreteríaprueba';
    private $username = 'root';
    private $password = '';
    public $conexion;

    public function __construct() {
        // Usamos $this-> para llamar a las variables de arriba
        $this->conexion = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);

        // Añadimos una comprobación por si falla la conexión
        if (!$this->conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }
    }
}
?>