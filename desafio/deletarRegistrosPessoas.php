<?php
session_start();
include_once("config.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if(!empty($id)){
	$result_pessoas = "DELETE FROM pessoas WHERE id='$id'";
	$resultado_pessoas = mysqli_query($conexao, $result_pessoas);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado</p>";
		header("Location: index.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro:Não foi possivel apagar o usuário</p>";
		header("Location: index.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário/p>";
	header("Location: index.php");
}

?>
