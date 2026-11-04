<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <center>
        <form action="/TodoList-Login/app/routing.php?action=criar" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Neste campo Digite seu Nome">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Neste campo Digite seu Email">
            <br>
            <label for="senha">Senha:</label>
            <input type="text" name="senha" id="senha" placeholder="Neste campo Digite sua Senha">
            <br>
            <center>
                <button type="submit">Enviar</button>
            </center>
        </form>
    </center>
</body>
</html>