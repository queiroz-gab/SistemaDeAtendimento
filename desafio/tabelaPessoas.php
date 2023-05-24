<?php

include_once('config.php');

mysqli_select_db($conexao, 'formulario');
$query = sprintf("SELECT id, nome, data_nasc, cpf, sexo, cidade, bairro, rua, numero, complemento  FROM pessoas");
$dados = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);
?>

<html>
	<head>
	<title>Cadastro de Pessoas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="h1_tabela">Tabela de Cadastro</h1>
<table border="1">
    <thead>
        <tr>
                <td>Nome</td>
                <td>Data de Nascimento</td>
                <td>CPF</td>
                <td>Sexo</td>
                <td>Cidade</td>
                <td>Bairro</td>
                <td>Rua</td>
                <td>Número</td>
                <td>Complemento</td>
                <td>Ações</td>
        </tr>

    </thead>
    <tbody>
<?php
	if($total > 0) {
        do {
?>
    <tr>
            <td><?=$linha['nome']?></td>
            <td><?=$linha['data_nasc']?></td>
            <td><?=$linha['cpf']?></td>
            <td><?=$linha['sexo']?></td>
            <td><?=$linha['cidade']?></td>
            <td><?=$linha['bairro']?></td>
            <td><?=$linha['rua']?></td>
            <td><?=$linha['numero']?></td>
            <td><?=$linha['complemento']?></td>
            <td>
                <a href="editarRegistros.php">Editar /</a>
                <a href="">Apagar</a>
            </td>
            
    </tr>
<?php
		}while($linha = mysqli_fetch_assoc($dados));
	}
?>    
        </tbody>
    </table>
</body>
</html>
<?php
mysqli_free_result($dados);
?>
