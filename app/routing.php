<?php
    session_start();
    require_once __DIR__ . "/controller/usuarioController.php";
    $action = $_GET['action'] ?? '';
    $usuarioController = new UsuarioController();

    switch ($action) {
        case 'criar':
            # code...
            break;
        case 'login':
            $usuarioController->login($_POST['email'], $_POST['senha']);
            break;
        default:
            # code...
            break;
    }
?>