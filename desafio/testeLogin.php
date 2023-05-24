<?php
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM formulario WHERE 'email' = $email and 'senha' = $senha";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1) {
            header('Location: login.php');
        } else {
            header('Location: tabelaPessoas.php');
        }
    } 
    else {
        header('Location: login.php');
    }

?>