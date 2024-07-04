<?php
 include_once('../db/config.php');

session_start();

function logout() {
    session_destroy();
    header("Location: ../login/login.php");
    exit;
}

if (isset($_POST['logout'])) {
    logout();
}

if(!isset($_SESSION['email']) || !isset($_SESSION['senha']) ) {
    logout();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/icons8-product-50.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/home.css">
    <title>| SIP |</title>
</head>
<body>
    <div class="header-box">
             <ul class="ul-box">
                <div class="div-menu">
                 <img class="header-img" src="../../img/icons8-product-50.png" alt="Logo">
                    <p class="ul-link">|</p>   
                    <a class="ul-link" href="home.php">Home</a>
                    <a class="ul-link" href="../cadastroPatrimonio/cadastroPatrimonio.php">Cadastro de Patrimônios</a>
                    <a class="ul-link" href="#">Patrimônios</a>
                    <a class="ul-link" href="#">Ajuda</a>
                    <p class="ul-link">|</p>
                </div>
                <div class="div-logout">
                    <form class="form-logout" method="POST" action="home.php">
                        <p class="ul-link">|</p>
                        <a class="ul-link" href="../usuario/usuario.php">Usuário</a>
                        <button class="form-button-sair" type="submit" name="logout">Sair</button>
                        <p class="ul-link">|</p>
                    </form>
                </div>
            </ul>
    </div>
    <div class="main-box">
        <h1 class="h1-home">Bem-vindo ao SIP</h1>
        <p class="p-home">Sistema de Inventário de Patrimônios</p>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

