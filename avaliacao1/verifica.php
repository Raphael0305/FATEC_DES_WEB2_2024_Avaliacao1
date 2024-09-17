
<?php
// PAGINA DE VERIFICAR LOGIN


session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["usuario"];
    $password = $_POST["senha"];
    if (($username == "coordenacao" && $password == "coordenacao") ||  ($username == "tecnicos" && $password == "tecnicos")) {
        $_SESSION["user"] = $username;
        $_SESSION["logado"] = true;
        header("Location: entrou.php");
        exit();
    } else {
        $_SESSION["logado"] = false;
        $erro = "Tu erro a senha ou o usuário DOG";
        exit();
    }
}
?>