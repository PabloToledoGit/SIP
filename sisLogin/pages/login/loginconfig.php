<?php
    session_start();
    include_once('../db/config.php');

    if(isset($_POST['submit']) && $_POST['senha'] && $_POST['email'] && !empty($_POST['submit'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if($row['email'] == $email && $row['senha'] == $senha) {
            $_SESSION['email'] = $email; // Atribui o valor do email à variável de sessão
            $_SESSION['senha'] = $senha; // Atribui o valor da senha à variável de sessão
            header('Location: ../home/home.php');
        } else {
            header('Location: login.php');
        }
    }
?>