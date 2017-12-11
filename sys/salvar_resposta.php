<?php
if(isset($_POST['resposta_1'])){
	include_once "../classes/config.php";
	require_once("../classes/BD.class.php");
	BD::conn();
	$idusuario = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'id', FILTER_SANITIZE_STRING))) );
	$data_resposta = date('Y-m-d H:i:s');
	$resposta_1 = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'resposta_1', FILTER_SANITIZE_STRING))) );
	$resposta_2 = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'resposta_2', FILTER_SANITIZE_STRING))) );
	$resposta_3 = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'resposta_3', FILTER_SANITIZE_STRING))) );
	$resposta_4 = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'resposta_4', FILTER_SANITIZE_STRING))) );
	$resposta_5 = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'resposta_5', FILTER_SANITIZE_STRING))) );
	$resposta_6 = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'resposta_6', FILTER_SANITIZE_STRING))) );
	$resposta_7 = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'resposta_7', FILTER_SANITIZE_STRING))) );
	$resposta_8 = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'resposta_8', FILTER_SANITIZE_STRING))) );
	$resposta_9 = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'resposta_9', FILTER_SANITIZE_STRING))) );
	$resposta_10 = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'resposta_10', FILTER_SANITIZE_STRING))) );

	$insert = BD::conn()->prepare("INSERT INTO respostas (q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,id_usuario,data_resposta) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
	$arrayInsert = array($resposta_1,$resposta_2,$resposta_3,$resposta_4,$resposta_5,$resposta_6,$resposta_7,$resposta_8,$resposta_9,$resposta_10,$idusuario,$data_resposta);
	if($insert->execute($arrayInsert)){
		$pegaUsuarios = BD::conn()->prepare("SELECT 
			q1,perguntas.resposta_correta
			FROM
			respostas
			LEFT JOIN
			perguntas ON perguntas.id=respostas.q1
			WHERE respostas.id_usuario=$idusuario AND respostas.data_resposta='$data_resposta'
			UNION 

			SELECT 
			q2,perguntas.resposta_correta
			FROM
			respostas
			LEFT JOIN
			perguntas ON perguntas.id=respostas.q2
			WHERE respostas.id_usuario=$idusuario AND respostas.data_resposta='$data_resposta'

			UNION 

			SELECT 
			q3,perguntas.resposta_correta
			FROM
			respostas
			LEFT JOIN
			perguntas ON perguntas.id=respostas.q3
			WHERE respostas.id_usuario=$idusuario AND respostas.data_resposta='$data_resposta'

			UNION 

			SELECT 
			q4,perguntas.resposta_correta
			FROM
			respostas
			LEFT JOIN
			perguntas ON perguntas.id=respostas.q4
			WHERE respostas.id_usuario=$idusuario AND respostas.data_resposta='$data_resposta'

			UNION 

			SELECT 
			q5,perguntas.resposta_correta
			FROM
			respostas
			LEFT JOIN
			perguntas ON perguntas.id=respostas.q5
			WHERE respostas.id_usuario=$idusuario AND respostas.data_resposta='$data_resposta'

			UNION 

			SELECT 
			q6,perguntas.resposta_correta
			FROM
			respostas
			LEFT JOIN
			perguntas ON perguntas.id=respostas.q6
			WHERE respostas.id_usuario=$idusuario AND respostas.data_resposta='$data_resposta'

			UNION 

			SELECT 
			q7,perguntas.resposta_correta
			FROM
			respostas
			LEFT JOIN
			perguntas ON perguntas.id=respostas.q7
			WHERE respostas.id_usuario=$idusuario AND respostas.data_resposta='$data_resposta'

			UNION 

			SELECT 
			q8,perguntas.resposta_correta
			FROM
			respostas
			LEFT JOIN
			perguntas ON perguntas.id=respostas.q8
			WHERE respostas.id_usuario=$idusuario AND respostas.data_resposta='$data_resposta'

			UNION 

			SELECT 
			q9,perguntas.resposta_correta
			FROM
			respostas
			LEFT JOIN
			perguntas ON perguntas.id=respostas.q9
			WHERE respostas.id_usuario=$idusuario AND respostas.data_resposta='$data_resposta'

			UNION 

			SELECT 
			q10,perguntas.resposta_correta
			FROM
			respostas
			LEFT JOIN
			perguntas ON perguntas.id=respostas.q10
			WHERE respostas.id_usuario=$idusuario AND respostas.data_resposta='$data_resposta'

			UNION 

			SELECT 
			q2,perguntas.resposta_correta
			FROM
			respostas
			LEFT JOIN
			perguntas ON perguntas.id=respostas.q2
			WHERE respostas.id_usuario=$idusuario AND respostas.data_resposta='$data_resposta'");
		$pegaUsuarios->execute();
		$i=0;
		while($row = $pegaUsuarios->fetch()){
			$resposta_correta = utf8_encode($row['resposta_correta']);
			$i = $i + $resposta_correta;
		}

		$resultado = $i*10;
		$update = BD::conn()->prepare("UPDATE respostas SET resultado = ? WHERE id_usuario = ? AND data_resposta = ?");
		if($update->execute(array($resultado,$idusuario,$data_resposta))){
			header("Location: ../resultado.php?data_resposta=$data_resposta"); 
		}	
	}else{
		header("Location: ../perguntas.php"); 
	}
}		
?>