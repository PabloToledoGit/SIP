<?php
    // Configuração do banco de dados
    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'banco-sia';

    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Checa para conexões com o banco de dados
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
?>