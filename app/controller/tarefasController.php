<?php 
    require_once __DIR__ . '/../model/tarefa.php';

    class TarefasController {
        private $tarefaModel;

        public function __construct() {
            $this->tarefaModel = new Tarefa();
        } 

        public function criar($desc) { 
            $tarefas = $this->tarefaModel->criar($desc, $_SESSION['usuario_id']);
            if ($tarefas !== false) {
                //header("Location: /TodoList-Login/app/view/tarefa.php");
                header("Location: /TodoList-Login/app/routing.php?tarefas=listar");
                exit;
            }
        }

        public function listar() {
            $tarefas = $this->tarefaModel->listar($_SESSION['usuario_id']);
            include __DIR__ . "/../view/tarefa.php";
        }

        public function excluirTarefa() {
            if (isset($_GET['id'])) {
                $tarefas= $this->tarefaModel->excluir($_SESSION['usuario_id'], $_GET['id']);
                if ($tarefas !== false) {
                    header("Location: /TodoList-Login/app/routing.php?tarefas=listar");
                    exit;
                }
            }
        }
    }

?>