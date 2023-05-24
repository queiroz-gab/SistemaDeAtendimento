<?php

    if(isset($_POST['submit'])) {

        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $data_nasc = $_POST['data_nascimento'];
        $cpf = $_POST['CPF'];
        $sexo = $_POST['genero'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['num_casa'];
        $complemento = $_POST['complemento'];

        $insert = "INSERT INTO pessoas(email, senha, nome, data_nasc, cpf, sexo, cidade, bairro, rua, numero, complemento) VALUE ('$email', '$senha', '$nome', '$data_nasc', '$cpf', '$sexo', '$cidade', '$bairro', '$rua', '$numero', '$complemento')";

        //echo $insert;

        $result = mysqli_query($conexao, $insert);

        $conexao -> close();

    }

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
                <legend><b>Cadastrar novo Usuário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="senha" class="labelInput">E-mail *</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha *</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo *</label>
                </div>
                <br><br>
                 <label for="data_nascimento"><b>Data de Nascimento *</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="CPF" id="CPF" class="inputUser" required>
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
                    <input type="text" name="cidade" id="cidade" class="inputUser">
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser">
                    <label for="bairro" class="labelInput">Bairro</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="rua" id="rua" class="inputUser">
                    <label for="rua" class="labelInput">Rua</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="num_casa" id="num_casa" class="inputUser">
                    <label for="num_casa" class="labelInput">Número</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="complemento" id="complemento" class="inputUser">
                    <label for="complemento" class="labelInput">Complemento</label>
                </div>
                <br><br>
                <div>
                <input type="submit" name="submit" id="submit" value="Cadastrar">
                <a href="tabelaPessoas.php"></a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>