<?php 
    require_once __DIR__ . '/../model/tarefa.php';

    class TarefasController {
        private $tarefaModel;

        public function __construct() {
            $this->tarefaModel = new Tarefa();
        } 

        public function criar() { 
            $this->tarefaModel->criar();
        }
    }

?>