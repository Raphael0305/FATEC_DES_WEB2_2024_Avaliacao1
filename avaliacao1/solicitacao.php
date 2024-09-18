<?php
session_start();


$todosArquivos = file_get_contents("tudo.txt");
$conteudo_dsm =  file_get_contents("dsm.txt");
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

        <h1>Solicitações de Laboratório</h1>

        <div class="solicitacoes">
            <pre><?php
            echo htmlspecialchars($todosArquivos);
            ?></pre>
        </div>

        <button><a href="entrou.php">VOLTAR</a></button>
    </div>
</body>

</html>
