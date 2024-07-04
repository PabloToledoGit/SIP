<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/usuario.css">
    <link rel="icon" href="../../img/icons8-product-50.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/home.css">
    <title>| SIP |</title>
</head>
<style>
    .crud-box {
        width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-left: 25%;
        padding: 0rem 5rem;
    }

    .h1-crud {
        text-align: center;
        margin-top: 5%;
    }

    .form-crud {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-group {
        margin-top: 2%;
    }

    .form-button {
        width: 50%;
        margin-left: 25%;
        margin-top: 5%;
    }

    .form-select option {
        text-align: center;
    }

    .form-button {
        background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
        border: none;
        padding: 10px 25px;
        color: white;
        font-size: 18px;
        cursor: pointer;
        border-radius: 10px;
        margin-bottom: 2rem;
    }
</style>

<body>
    <div class="header-box">
        <ul class="ul-box">
            <div class="div-menu">
                <img class="header-img" src="../../img/icons8-product-50.png" alt="Logo">
                <p class="ul-link">|</p>
                <a class="ul-link" href="../home/home.php">Home</a>
                <a class="ul-link" href="cadastroPatrimonio.php">Cadastro de Patrimônios</a>
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
    <div class="crud-box">
        <h1 class="h1-crud">Cadastro de Patrimônios</h1>
        <form class="form-crud" method="POST" action="cadastroPatrimonio.php">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" id="descricao" name="descricao" required>
            </div>
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <label class="mt-1" for="empresa">Empresa</label>
            <select class="form-select form-select-lg" aria-label="Large select example" name="empresa" id="empresa">
                <option value="" selected></option>
                <option value="1">AJR</option>
                <option value="2">SDA</option>
                <option value="3">COURRIER</option>
                <option value="4">BAIXADA</option>
            </select>
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" class="form-control" id="data" name="data" required>
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" class="form-control" id="valor" name="valor" required>
            </div>
            <div class="form-group">
                <label for="local">Local</label>
                <input type="text" class="form-control" id="local" name="local" required>
            </div>
            <div class="form-group">
                <label for="condicao">Condição do Produto</label>
                <input type="text" class="form-control" id="condicao" name="condicao" required>
            </div>
            <div class="form-group">
                <label for="vidault">Vida Util</label>
                <input type="text" class="form-control" id="vidault" name="vidault" required>
            </div>
            <div class="form-group">
                <label for="depreciacao">Depreciação</label>
                <input type="text" class="form-control" id="depreciacao" name="depreciacao" required>
            </div>
            <div class="form-group">
                <label for="numeropatrimonio">Numero do Patrimônio</label>
                <input type="text" class="form-control" id="numeropatrimonio" name="numeropatrimonio" required>
            </div>
            <div class="form-group">
                <label for="notafiscal">Nota Fiscal</label>
                <input type="text" class="form-control" id="notafiscal" name="notafiscal" required>
            </div>
            <button type="submit" class="form-button">Cadastrar</button>
        </form>
    </div>
</body>

</html>