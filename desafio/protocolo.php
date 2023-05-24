<?php

    if(isset($_POST['submit'])) {

        include_once('config.php');

        $num_prot = $_POST['num_prot'];
        $desc = $_POST['desc_prot'];
        $data_atual = $_POST['data_atual'];
        $prazo = $_POST['prazo'];
        $contribuinte = $_POST['contribuinte'];
    
        $insert = "INSERT INTO protocolo(num_prot, descri, data_atual, prazo, contribuinte) VALUES ('$num_prot', '$desc', '$data_atual', '$prazo', '$contribuinte')";

        echo $insert;

        $result = mysqli_query($conexao, $insert);
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        #data_atual {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
    </style>
    <title>Sistema de Atendimento</title>
<body>
    <div class="box">
        <form action="protocolo.php" method="POST">
            <fieldset>
                <legend><b>Protocolo</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="num_prot" id="num_prot" class="inputUser" required>
                    <label for="num_prot" class="labelInput">Número do Protocolo *</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="desc_prot" id="desc_prot" class="inputUser" required>
                    <label for="desc_prot" class="labelInput">Descrição *</label>
                </div>
                <br><br>
                 <label for="data_atual"><b>Data</b></label>
                    <input type="date" name="data_atual" id="data_atual" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="prazo" id="prazo" class="inputUser" required>
                    <label for="prazo" class="labelInput">Prazo *</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="contribuinte" id="contribuinte" class="inputUser" required>
                    <label for="contribuinte" class="labelInput">Contribuinte *</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
                </div>
            </fieldset>
        </form>
    </div>
    <link rel="stylesheet" href="data.js">
</body>
</html>