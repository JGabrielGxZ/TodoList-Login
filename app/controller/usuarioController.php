<?php
    session_start();
    require_once __DIR__ . '/../model/usuario.php';
    class UsuarioController {
        private $usuarioModel;

        public function __construct() {
            $this->usuarioModel = new Usuario();
        } 

        public function login($e, $s) {
            $email = trim($e);
            $senha = trim($s);

            if (!empty($email) && !empty($senha)) {
                $usuario = $this->usuarioModel->login($email);



                if ($usuario && password_verify($senha, $usuario['senha'])) {
                    $_SESSION['usuario_email'] = $usuario['email'];
                    $_SESSION['usuario_id'] = $usuario['id'];
                    $_SESSION['usuario_nome'] = $usuario['nome'];
                    
                    //header('Location: /TodoList-Login/app/view/tarefa.php');
                    header("Location: /TodoList-Login/app/routing.php?tarefas=listar");
                    exit;
                }
            } else {
                header('Location: /TodoList-Login/app/view/login.php?erro=1');
                exit;
            }
        }

        public function criar($n, $e, $s) {
            $nome = trim($n);
            $email = trim($e);
            $senha = trim($s);

            if (!empty($nome) && !empty($email) && !empty($senha)) {
                $usuario = $this->usuarioModel->criar($nome, $email, $senha);
                if ($usuario !== false) {
                    header('Location: /TodoList-Login/app/view/login.php');
                    exit;
                }
            }
        }

        public function sair() {
            if (isset($_SESSION['usuario_id'])) {
                session_unset(); //limpa sessão
                session_destroy(); //destroi sessão
                header("Location: /TodoList-Login/app/view/login.php");
                exit;
            }
        }

    }
?>