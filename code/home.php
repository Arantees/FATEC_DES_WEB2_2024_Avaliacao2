<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vagas de Estágio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
     crossorigin="anonymous">
</head>

<body>
    <center>
        <h2>Vagas de Estágio</h2>
    </center>

    <br>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario_ativo']; ?></h1>
    <a href="cadastrar.php">
        <button class="btn btn-success">Cadastrar vaga</button>
    </a>
    <br>
    <a href="listar.php">
        <button class="btn btn-success mt-3">Listar</button>
    </a>
    <br>

    <button class="btn btn-success mt-3"><a href="login.php">Logout</a></button>
</body>

</html>