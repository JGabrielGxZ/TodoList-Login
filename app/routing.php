<?php
    session_start();
    //usuarios:
    require_once __DIR__ . "/controller/usuarioController.php";
    $action = $_GET['action'] ?? '';
    $usuarioController = new UsuarioController();


    //tarefas:
    $tarefas = $_GET['tarefas'] ?? 'listar';


    switch ($action) {
        case 'criar':
            $usuarioController->criar($_POST['nome'], $_POST['email'], $_POST['senha']);
            break;
        case 'login':
            $usuarioController->login($_POST['email'], $_POST['senha']);
            break;
        case 'sair':
            $usuarioController->sair();
            break;
        default:
            # code...
            break;
    }

    switch ($tarefas) {
        case 'criar':
            $tarefas->criar();
            break;
        case 'listar':
            
            break;
        default:
            # code...
            break;
    }
?>