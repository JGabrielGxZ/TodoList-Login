<?php 
    require_once __DIR__ . "/../config/db.php";
    class Tarefa {

        private $conn;

        public function __construct() {
            $db = new db();
            $this->conn = $db->conectar();
        }

        public function Criar() {
            
        }
    }

?>