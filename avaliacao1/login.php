<?php

session_start();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="verifica.php" method="post">
        <div class="main-login">
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                        <div class="inpute">
                            <input type="checkbox">
                            <p class="lembrar">Lembrar</p>
                        </div>
                    </div>
                    <button class="btn-login" method="submit" >LOGIN</a></button>
                    <div class="descricao">
                        <a href="" class="esqueceu">Esqueceu a senha?</a>
                        <a href="" class="cadastrar">Cadastrar</a>
                    </div>
                </div>
            </div>
    </form>
</body>

</html>