<?php
session_start();
include_once "classes/config.php";
require_once("classes/BD.class.php");
BD::conn();

if(isset($_POST['email'])){
	$_SESSION['email']=$_POST['email'];
}

if(!isset($_SESSION['email'])){
	$email = "";
}else{
	$email = $_SESSION['email'];
	$nome  = $_SESSION['nome'];
	$id    = $_SESSION['id'];
	$data  = $_GET["data_resposta"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="images/logo.png">	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perguntas e Respostas</title>
	<meta name="theme-color" content="#000000">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/ran.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<!-- JS Libraries -->
	<script src="js/jquery-3.1.0.min.js"></script>
	<!--ajax-->
	<script type="text/javascript" src="js/ajax.js"></script>
	<style>
	::-webkit-input-placeholder {
		color: #fff;
	}

	:-moz-placeholder { /* Firefox 18- */
		color: #fff;  
	}

	::-moz-placeholder {  /* Firefox 19+ */
		color: #fff;  
	}

	:-ms-input-placeholder {  
		color: #fff;  
	}
</style>
</head>
<body>
	<div class="main">
		<!-- Top/Menu-->
		<!--Inicio-->
		<header class="header">
			<div class="scroll">
				<div class="container">
					<div class="sub_pes">
						<a href="index.php"><img class="logo" src="images/logo.png"></a>
						<h1 style="float:right;color:#fff;font-size: 14px;margin-top: 20px">FISIOTERAPIA - DIAGNOSIS</h1>
						<!--input class="pesquisa" placeholder="Pesquisar"/-->
					</div>
					<div class="collapse-mobile">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="collapse">
						<ul>
							
							<li><a href="sys/sair.php"class="buton"><b class="cor_cadas">Sair</b></a></li>

						</ul>
					</div>
				</div>
			</div>
		</header>
		<!--Fim-->

		<!--Banner_Inicio-->
		<section class="background">
			<div class="container" style="height: 50px">
				<div class="background-text">
				</div>
			</div>
		</section>
		<!--Fim-->
		<div class="preloader">
			<div class="spinner"></div>
		</div>
		<br><br>
		<!--INICIO DO CONTEINER PRINCIPAL-->
		<section class="separation">
			<div class="container">
				<div class="content">
					<div class="row">
						<div class="column column-12">
							<div class="column column-4">	
								<br><br>
								<h1 class="text_grande">PARABÉNS! VOCÊ FINALIZOU SEU TESTE!</h1>
								<a href="#abrirmodal" class="btn btn-messenger">Ranking</a>
								<br>
								<?php
								$pegaUsuarios = BD::conn()->prepare("SELECT * FROM `respostas` WHERE data_resposta='$data' AND id_usuario=$id");
								$pegaUsuarios->execute();
								while($row = $pegaUsuarios->fetch()){
									$resultado = utf8_encode($row['resultado']);
								}
								?>
								<!--inicio-->
							</div>
							<div class="column column-4 color4">
								<h1  style="color:#fff;">Sua nota foi: <?php echo $resultado; ?>%!</h1>
								<div class="recorte" onclick="startAnimation()" ></div>
								<h2  style="color:#fff;">Paciente</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--FIM DO CONTEINER-->


	<!--ALERTA-->
	<!--INICIO-->
	<div id="abrirmodal" class="modalDialog">
		<div class="container">
			<div class="content">
				<div class="row">
					<a href="#fechar" title="Fechar" class="fechar" style="color:#fff">X</a>
					<div >
						<div class="column column-12">
							<h1>Ranking</h1>
							<table class="table table-hover">
								<thead>
									<th>Colocação</th>
									<th>Nome</th>
									<th>Pontos</th>
								</thead>
								<tbody>
									<?php
									$pegaUsuarios = BD::conn()->prepare("SELECT usuario.nome,respostas.resultado FROM respostas LEFT JOIN usuario on usuario.id=respostas.id_usuario ORDER BY respostas.resultado DESC");
									$pegaUsuarios->execute();
									$i=1;
									while($row = $pegaUsuarios->fetch()){
										$nome = utf8_encode($row['nome']);
										$resultado = utf8_encode($row['resultado']);
										?>
										<tr>
											<td align="center"><?php echo $i; ?>ª</td>
											<td align="center"><?php echo $nome; ?></td>
											<td align="center"><?php echo $resultado; ?></td>
										</tr>
										<?php
										$i++;
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--FIM-->

	<!--FOOTER-->
	<!--INICIO--><br>
	<br>
	<footer class="footer">
		<p style="color:#000">Desenvolvido e programado por alunos da FTC</p>
		<p style="color:#000">Breno Macedo</p>
		<p style="color:#000">Filipe Ribeiro</p>
		<p style="color:#000">Iago Virgílio</p>
		<p style="color:#000">Leonardo Reis</p>
		<p style="color:#000">Renildo Almeida</p>


	</footer>
	<!--FIM-->
</div>
<!-- JS App -->
<script src="js/script.min.js"></script>
</body>