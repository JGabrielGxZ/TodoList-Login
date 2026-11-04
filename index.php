<!-- index usado para redirecionar, não como página principal -->

<?php 
    session_start();

    if (isset($_SESSION['usuario_id'])) {
        // pagina principal
    } else {
        header("Location: /TodoList-Login/app/view/login.php");
        exit;
    }

?>