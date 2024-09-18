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

$conteudo_dsm = file_get_contents('dsm.txt');
$conteudo_ge = file_get_contents('ge.txt');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/solicitacao.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="titiloPagina">
        <div class="all">

            <h1>Amostrando Salas Reservadas</h1>

            <div class="cursos">
                <div class="GE">
                    <h2>CURSO DE GE</h2>
                    <div class="conteudo">
                        <pre><?php echo htmlspecialchars($conteudo_ge); ?></pre>
                    </div>
                </div>

                <div class="DSM">
                    <h2>CURSO DE DSM</h2>
                    <div class="conteudo">
                        <pre><?php echo htmlspecialchars($conteudo_dsm); ?></pre>
                    </div>
                </div>
            </div>
            <button><a href="entrou.php">VOLTAR</a></button>
        </div>
    </div>
</body>

</html>
