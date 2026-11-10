<?php
    //usuarios:
    require_once __DIR__ . "/controller/usuarioController.php";
    $action = $_GET['action'] ?? '';
    $usuarioController = new UsuarioController();


    //tarefas:
    require_once __DIR__ . "/controller/tarefasController.php";
    $tarefas = $_GET['tarefas'] ?? 'listar';
    $tarefasController = new TarefasController();


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
            $tarefasController->criar($_POST['desc']);
            break;
        case 'listar':
            $tarefasController->listar();
            break;
        case 'excluir':
            $tarefasController->excluirTarefa();
            break;
        default:
            
            break;
    }
?>