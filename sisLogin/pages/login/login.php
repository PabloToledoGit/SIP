<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/icons8-product-50.png" type="image/x-icon">
    <title>| Login SIP |</title>
</head>
<body>
    <header>
        <div class="header-box">
            <p class="p-header">não tem conta ainda?</p>
            <a class="a-header" href='../formulario/formulario.php'>Cadastre-se</a>
        </div>
    </header>
    <div class="box">
        <form method="POST" action="loginconfig.php">
                <legend>
                    <b class="legend-b">Login de Colaboradores</b>
                    <p class="legend-p">Entre com seu email e senha</p>
                </legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" placeholder="Email" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" placeholder="Senha" required>
                </div>
                <br><br>
                <input type="submit" name="submit" value="Entrar" class="btn">
        </form>
    </div>
</body>
</html>