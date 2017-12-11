<?php
if(isset($_POST['nome'])){
	include_once "../classes/config.php";
	require_once("../classes/BD.class.php");
	BD::conn();

	$nome = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING))) );
	$email = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING))) );
	$senha = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING))) );
	$data_nome = date('Y-m-d');

	
	$insert = BD::conn()->prepare("INSERT INTO usuario (nome,email,senha,data_usuario) VALUES (?,?,?,?)");
	$arrayInsert = array($nome,$email,$senha,$data_nome);
	if($insert->execute($arrayInsert)){
		echo "<script>
		alert('Cadastro efetuado com sucesso!');
		window.location='../login.php';
		</script>";
	}else{
		echo "<script>
		alert('Erro ao cadastrar, tente novamente!');
		window.location='../cadastro.php';
		</script>";
	}
	
}



?>