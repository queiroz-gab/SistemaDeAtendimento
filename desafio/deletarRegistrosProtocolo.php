
<?php
session_start();
include_once("config.php");

$num_prot = filter_input(INPUT_GET, 'num_prot', FILTER_SANITIZE_NUMBER_INT);

if(!empty($num_prot)){
	$result_protocolo = "DELETE FROM protocolo WHERE id='$num_prot'";
	$resultado_protocolo = mysqli_query($conexao, $result_protocolo);
	if(mysqli_affected_rows($conexao)){
		$_SESSION['msg'] = "<p style='color:green;'>Protocolo apagado</p>";
		header("Location: protocolo.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro:Não foi possivel apagar o protocolo</p>";
		header("Location: protocolo.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário/p>";
	header("Location: protocolo.php");
}

?>