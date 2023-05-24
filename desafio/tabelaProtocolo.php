<?php

include_once('config.php');

mysqli_select_db($conexao, 'formulario');
$query = sprintf("SELECT num_prot, descri, data_atual, prazo, contribuinte FROM protocolo");
$dados = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);
?>

<html>
	<head>
	<title>Cadastro de Protocolo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Tabela de Protocolo</h1>
<table border="1">
    <thead>
        <tr>
                <td>Protocolo</td>
                <td>Descrição</td>
                <td>Data</td>
                <td>Prazo</td>
                <td>Contribuinte</td>
                <td>Ações</td>
        </tr>

    </thead>
    <tbody>
<?php
	if($total > 0) {
        do {
?>
    <tr>
            <td><?=$linha['num_prot']?></td>
            <td><?=$linha['descri']?></td>
            <td><?=$linha['data_atual']?></td>
            <td><?=$linha['prazo']?></td>
            <td><?=$linha['contribuinte']?></td>
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
