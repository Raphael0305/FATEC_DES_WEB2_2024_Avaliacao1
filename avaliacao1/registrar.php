
<?php
session_start();

    
if($_SESSION["user"] !== "coordenacao"){
    header("Location: entrou.php");
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/registrar.css">
    <title>Document</title>
</head>

<body>

    <form action="computando.php" method="post">
        <div class="formezada">
            <div class="laboratorio">
                <h2>Escolha o laboratorio</h2><br>
                <select name="laboratorio" id="">
                    <option value="lab1" >Laboratório 1</option>
                    <option value="lab2">Laboratório 2</option>
                    <option value="lab3">Laboratório 3 </option>
                </select>
            </div>


            <div class="data">
                <input type="date" name="data" id="">
            </div>

            <div class="solicitacoes">
                <label for="">Solocitações</label>
                <input type="text" name="solocitacao">
            </div>

            <div class="escolheCurso">
                <h2>Escolha o curso</h2>
                <select name="curso" id="">
                    <option value="dsm">DSM</option>
                    <option value="ge">GE</option>
                </select>
            </div>

            <button type="submit">ENVIAR</button>
            
        </div>
    </form>

</body>

</html>