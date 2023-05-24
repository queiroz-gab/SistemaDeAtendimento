<?php
    session_start();
    include_once("config.php");

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $data_nasc = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_NUMBER_INT);
    $CPF = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
    $sexo = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_NUMBER_INT);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_NUMBER_INT);
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
    $complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);

    $result_p = "UPDATE pessoas SET nome='$nome', data_nasci='$data_nasc', cpf='$CPF', genero='$sexo', cidade='$cidade', bairro='$bairro', rua='$rua', numero='$numero', complemento='$complemento' ";

    $resultado_p = mysqli_query($conexao, $result_p);

    if(mysqli_insert_id($conexo))


    $result_pessoa = "SELECT * FROM pessoas WHERE id = '$id'";

    $resultado_pessoa = mysqli_query($conexao, $result_pessoa);

    $row_pessoa = mysqli_fetch_assoc($resultado_pessoa);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Atendimento</title>
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Editar Pessoa</b></legend>
                <div class="inputBox"
                    <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $row_usuario['nome']; ?>" required>
                    <label for="nome" class="labelInput">Nome completo *</label>
                </div>
                <br><br>
                 <label for="data_nascimento"><b>Data de Nascimento *</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $row_usuario['data_nascimento']; ?>" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="CPF" id="CPF" class="inputUser" value="<?php echo $row_usuario['cpf']; ?>" required>
                    <label for="CPF" class="labelInput">CPF *</label>
                </div>
                <p>Sexo *</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $row_usuario['cidade']; ?>">
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser" value="<?php echo $row_usuario['bairro']; ?>">
                    <label for="bairro" class="labelInput">Bairro</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="rua" id="rua" class="inputUser" value="<?php echo $row_usuario['rua']; ?>">
                    <label for="rua" class="labelInput">Rua</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="num_casa" id="num_casa" class="inputUser" value="<?php echo $row_usuario['num_casa']; ?>">
                    <label for="num_casa" class="labelInput">Número</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="complemento" id="complemento" class="inputUser" value="<?php echo $row_usuario['complemento']; ?>">
                    <label for="complemento" class="labelInput">Complemento</label>
                </div>
                <br><br>
                <div>
                <input type="submit" name="submit" id="submit" value="Editar">
                <a href="tabelaPessoas.php"></a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>