<?php
include_once('../db/config.php');

if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

    // Verifica se a data de nascimento foi preenchida
    if(empty($data_nasc and $sexo and $cidade and $estado and $endereco)) {
        echo 'Erro: há campos que não foram preenchidos.';
        exit; // Encerra o script caso a data de nascimento esteja vazia
    }

    // Prepara a consulta SQL usando prepared statements
    $stmt = $db->prepare("INSERT INTO usuarios (nome, email, telefone, sexo, data_nasc, cidade, estado, endereco, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if($stmt === false) {
        // Erro na preparação da declaração SQL
        die('Erro na preparação da consulta SQL: ' . htmlspecialchars($db->error));
    }

    // Bind parameters
    $stmt->bind_param("sssssssss", $nome, $email, $telefone, $sexo, $data_nasc, $cidade, $estado, $endereco, $senha);

    // Executa a consulta
    if($stmt->execute()){
       echo "<script>alert('Registro feito com sucesso!!');</script>";  // Registro feito com sucesso
    } else {
        echo  "<script>alert('Falha ao realizar registro.');</script>"; // Erro ao executar a consulta
    }

    // Fecha a declaração
    $stmt->close();

    header('Location: ../login/login.php');
}

// Fecha a conexão com o banco de dados
$db->close();
?>
