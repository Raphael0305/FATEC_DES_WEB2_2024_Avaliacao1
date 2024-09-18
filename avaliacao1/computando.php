<?php
    //Guardando em arquivo txt


    session_start();

    $DSM = "dsm.txt";
    $GE = "ge.txt";
    echo $_POST["curso"];
    if(isset($_POST["laboratorio"]) && isset($_POST["data"]) && isset($_POST["curso"]) ){

        $arquivoDSM = fopen("dsm.txt", "a");
        $arquivoGE = fopen("ge.txt", "a");
        $arquivoTUDO = fopen("tudo.txt", "a");

            fwrite($arquivoTUDO, $_POST["laboratorio"] . " | " . $_POST["data"] . " | " . $_POST["solocitacao"] . "\n");
            fclose($arquivoTUDO);

        if($_POST["curso"] == "dsm"){
            fwrite($arquivoDSM, $_POST["laboratorio"] . " | " . $_POST["data"] . " | " . $_POST["solocitacao"] . "\n");
            fclose($arquivoDSM);
        }

        if($_POST["curso"] == "ge"){
            fwrite($arquivoGE, $_POST["laboratorio"] . " | " . $_POST["data"] . " | " . $_POST["solocitacao"] . "\n");
            fclose($arquivoGE);
        }        
    }else {
        echo "arquivo não aberto";
    }

    header("Location: registrar.php");

?>