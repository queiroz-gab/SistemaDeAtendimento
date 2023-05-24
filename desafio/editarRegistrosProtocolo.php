<?php
    session_start();
    include_once("config.php");

    $num_prot = filter_input(INPUT_POST, 'num_prot', FILTER_SANITIZE_NUMBER_INT);
    $descri = filter_input(INPUT_POST, 'descri', FILTER_SANITIZE_STRING);
    $data_atual = filter_input(INPUT_POST, 'data_atual', FILTER_SANITIZE_NUMBER_INT);
    $prazo = filter_input(INPUT_POST, 'prazo', FILTER_SANITIZE_NUMBER_INT);
    $contribuinte = filter_input(INPUT_POST, 'contribuinte', FILTER_SANITIZE_STRING);

    $result_prot = "UPDATE protocolo SET num_prot='$num_prot', descri='$descri', data_atual='$data_atual', prazo='$prazo', contribuinte='$contribuinte'";

    $resultado_prot = mysqli_query($conexao, $result_prot);

    if(mysqli_insert_id($conexo))


    $result_protocolo = "SELECT * FROM protocolo WHERE num_prot = '$num_prot'";

    $resultado_protocolo = mysqli_query($conexao, $result_protocolo);

    $row_protocolo = mysqli_fetch_assoc($resultado_protocolo);
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
                <legend><b>Editar Protocolo</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="num_prot" id="num_prot" class="inputUser" value="<?php echo $row_protocolo['num_prot']; ?>" required >
                    <label for="num_prot" class="labelInput">Número do Protocolo *</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="desc_prot" id="desc_prot" class="inputUser" value="<?php echo $row_protocolo['descri']; ?>" required>
                    <label for="desc_prot" class="labelInput">Descrição *</label>
                </div>
                <br><br>
                 <label for="data_atual"><b>Data</b></label>
                    <input type="date" name="data_atual" id="data_atual" value="<?php echo $row_protocolo['data_atual']; ?>" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="prazo" id="prazo" class="inputUser" value="<?php echo $row_protocolo['prazo']; ?>" required>
                    <label for="prazo" class="labelInput">Prazo *</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="contribuinte" id="contribuinte" class="inputUser" value="<?php echo $row_protocolo['contribuinte']; ?>" required>
                    <label for="contribuinte" class="labelInput">Contribuinte *</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit" value="Editar">
                <a href="tabelaProtocolo.php"></a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>