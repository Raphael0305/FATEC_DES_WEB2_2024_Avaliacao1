<?php

session_start();

if($_SESSION["user"] == "Visitante"){
    header("Location: entrou.php");
    exit();
}

if(($_SESSION["logado"] !== true)){
    header("Location: index.php");
    exit();
}


if(($_SESSION["user"] == "tecnicos")){
    header("Location: entrou.php");
    exit();
}


$conteudo_ge =  file_get_contents("ge.txt");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/solicitacaoall.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitações de Laboratório</title>
</head>

<body>

    <div class="all">

        <h1>Solicitações de GE</h1>

        <div class="solicitacoes">
            <pre><?php
            echo htmlspecialchars($conteudo_ge);
            ?></pre>
        </div>

        <button><a href="entrou.php">VOLTAR</a></button>
    </div>
</body>

</html>
