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
    <h1>Bem vindo ao menu de tarefas, <?php echo $_SESSION['usuario_nome'];?></h1>
    <form action="/TodoList-Login/app/routing.php?action=sair" method="post">
        <button type="submit">Sair</button>
    </form>

    <form action="/TodoList-Login/app/routing.php?tarefas=criar" method="post">
        <input type="text" name="desc" id="desc" placeholder="Descreva sua Tarefa">
        <button type="submit">Adicionar</button>
    </form>

    <h2>Suas Tarefas!</h2>
    <hr>
    <?php if (isset($tarefas)) : ?>
        <ul>
            <?php foreach($tarefas as $tarefa) : ?>
                <li>
                    
                </li>
            <?php endforeach?>
        </ul>
    <?php else :?>
    <h3>Você ainda não tem tarefas!</h3>
    <?php endif?>
</body>
</html>