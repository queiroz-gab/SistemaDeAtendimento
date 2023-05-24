<?php 

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conexao->connect_error) {
        echo 'Errno: '.$conexao->connect_errno;
        echo '<br>';
        echo 'Error: '.$conexao->connect_error;
        exit();
      }
?>