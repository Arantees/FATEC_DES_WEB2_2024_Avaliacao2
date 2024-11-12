<?php

require_once('classes/login.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $validador = new Login();

    if ($validador->verificar_credenciais($login, $senha)) {
        $_SESSION['usuario_ativo'] = "lulamolusco";
        header("Location: home.php");
        exit();
    } else {
        echo "Credenciais inválidas. Tente novamente.";
    }
}
