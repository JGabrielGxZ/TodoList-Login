<?php 
    session_start();

    if (isset($_SESSION['usuario_id'])) {
        // pagina principal
    } else {
        header("Location: /TodoList-Login/app/view/login.php");
        exit;
    }

?>