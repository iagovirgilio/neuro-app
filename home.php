<?php
session_start();
include_once "classes/config.php";
require_once("classes/BD.class.php");
BD::conn();

if(isset($_POST['nome'])){

	$_SESSION['nome']=$_POST['nome'];
}

if(!isset($_SESSION['nome'])){
	$nome = "";
	$cria_bolao = "#abrirmodal_alert";
}else{
	$id = $_SESSION['id'];
	$nome = $_SESSION['nome'];
	$email = $_SESSION['email'];
	$cria_bolao = "#abrirmodal";
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
		.alinhar{
			text-align: justify;
			color: #000;
		}
		.titulocentro{

			text-align: center;
			color: #000;
		}
		.scroll{
			overflow: auto;
			height: 250px;

		}
		.botaocentro{

			margin-left: 35%;
		}
		@media (min-width: 992px){ 
			.botaocentro{

			margin-left: 45%;
			}
			
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
					<div class="sub_pes">
						<!--input class="pesquisa" placeholder="Pesquisar"/-->
					</div>
					<div class="collapse-mobile">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="collapse">
						<ul>
							<?php 
							if (!isset($_SESSION['nome'])){
								?>
								<li><a href="cadastro.php" class="buton" ><b class="cor_cadas">Cadastro</b></a></li>
								<li id="login_li">
									<a href="login.php"   class="buton buton_login"><b style="color:#fff;font-size: 12px">Login</b></a>
								</li>	
								<?php
							}else{
								?>
								<li><a href="sys/sair.php"class="buton"><b class="cor_cadas">Sair</b></a></li>
								<?php
							}
							?>
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
		<br><br><br><br><br><br><br>
		<!--INICIO DO CONTEINER PRINCIPAL-->
		<section class="separation">
			<div class="container">
				<div class="content">
					<div class="row">
						<div class="column column-12">
							<div class="column column-4">	
								<br><br>
								<h1 class="text_grande">VAMOS DAR INICIO AO SEU TESTE!</h1>
							</div>
							<div class="column column-4 color3_largo">
								<h1  style="color:#fff;">Preciso de ajuda?</h1>
								<img src="images/medico/medico.png" style="float:left" height="310" width="150">
								<a href="#abrirmodal" onclick="" class="btn btn-messenger" style="margin-top: 30%">Vamos Começar?</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</se	ction>
	<!--FIM DO CONTEINER-->


	<!--ALERTA-->
	<!--INICIO-->
	<div id="abrirmodal" class="modalDialog">
		<div class="container">
			<div class="content">
				<div class="row">
					<a href="#fechar" title="Fechar" class="fechar" style="color:#fff">X</a>
					<div >
						<div class="column column-12 scroll"><br>
							<h2 class="titulocentro">CASO CLÍNICO</h2> <br>
							<p class="alinhar">Paciente A.D.N, sexo masculino, 47 anos, fumante, sedentário. Deu entrada ao hospital em 14/09/17, inconsciente levado por um acompanhante o qual relatou que enquanto ele voltava do trabalho conduzindo seu veículo, sentiu uma fraqueza no hemicorpo direito, estacionando o carro e perdendo a consciência logo depois. Após ter sido submetido TC, foi diagnosticado com AVC isquêmico da artéria cerebral media, levando a comprometimentos físicos: em nível de tônus, coordenação e equilíbrio, com hemiplegia em MSD e MID. Permanecendo acamado por 30 dias, apresentando complicações respiratórias.
</p><br>
<a href="perguntas.php" onclick="" class="btn btn-messenger botaocentro">Iniciar</a>


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