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
	header("Location: login.php"); 
}else{
	$email = $_SESSION['email'];
	$nome  = $_SESSION['nome'];
	$id    = $_SESSION['id'];
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
								<h1 class="text_grande">VAMOS DAR INICIO AO SEU TESTE!</h1>
								<br>
							</div>
							<div class="column column-4 color3_largo">
								<h1  style="color:#fff;">Preciso de ajuda?</h1>
								<img src="images/medico/medico.png" style="float:left" height="310" width="150">
								<a href="perguntas.php" onclick="" class="btn btn-messenger" style="margin-top: 30%">Vamos Começar?</a>
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

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--FIM-->

	<!--FOOTER-->
	<!--INICIO-->
	<br>
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