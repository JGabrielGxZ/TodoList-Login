<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>
<body>
    <center>
        <form action="/TodoList-Login/app/routing.php?action=login" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Neste campo Digite seu Email">
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Neste campo Digite sua Senha"><i class="bi bi-eye" id="iconeEye" onclick="verSenha()"></i>           
            <br>

            <script>
                let senha = document.getElementById("senha");
                let butao = document.getElementById("iconeEye")
                function verSenha() {
                    if (senha.type === "password") {
                        senha.type = "text";
                        butao.classList.replace("bi-eye", "bi-eye-slash");
                    }else {
                        if (senha.type === "text") {
                            senha.type = "password";
                            butao.classList.replace("bi-eye-slash", "bi-eye");
                        }
                    }
                }
            </script>
            
            <center>
                <button type="submit">Enviar</button>
            </center>

            <h4>Ainda não tem uma conta? <a href="/TodoList-Login/app/view/register.php">Clique Aqui!</a></h4>
        </form>
    </center>
</body>
</html>