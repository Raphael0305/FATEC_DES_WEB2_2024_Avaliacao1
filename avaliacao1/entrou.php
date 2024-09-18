
<?php
session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true) {
    $_SESSION["logado"] = false;
    $_SESSION["user"] = "Visitante";
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/entrou.css">
    
</head>

<body>
        <div class="fundo">
            <img src="img/img7.jpg" alt="">
        </div>
        <div class="title">
            <h1> Você esta logado como <b>
                    <?php echo htmlspecialchars($_SESSION["user"]); ?>
        </div>

        <div class="botoes">
            <div class="botaum">
                <button><a href="registrar.php">Registrar solicitação</a></button>
            </div>

            <div class="botaum">
                <button><a href="GE.php">Visualizar solicitações GE</a> </button>
            </div>

            <div class="botaum">
                <button><a href="DSM.php">Visualizar solicitações DSM</a> </button>
            </div>

            <div class="botaum">
                <button ><a href="solicitacao.php">Visualizar todas solicitações</a></button>
            </div>

        </div>

        <div class="logout">
            <button><a href="sair.php">SAIR</a></button>
        </div>
</body>

</html>