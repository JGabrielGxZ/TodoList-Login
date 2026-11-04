<?php 
    session_start();

    if (!isset($_SESSION['usuario_id'])) {
        header('Location: Location: /TodoList-Login/app/view/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo ao menu de tarfas, <?php echo $_SESSION['usuario_nome']; session_unset(); session_destroy();?></h1>

</body>
</html>