<?php 
    require_once __DIR__ . "/../config/db.php";
    class Tarefa {

        private $conn;

        public function __construct() {
            $db = new db();
            $this->conn = $db->conectar();
        }

        public function criar($desc, $usuarioId) {
            $sql = "INSERT INTO tarefas (descricao, usuario_id) VALUES (?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("si", $desc, $usuarioId);
            $stmt->execute();
            return true;
        }

        public function listar($usuarioId) {
            $sql = "SELECT * FROM tarefas WHERE usuario_id = ? ORDER BY data_criacao DESC";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $usuarioId);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_assoc();
        }
    }

?>