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
		@keyframes carteiro {
			from {
				background-position: 0px;
			}

			to {
				background-position: -1790px;
			}
		}

		#alingtext{

			text-align: left;
			margin-bottom: 30px;
		}


		.recorte {
			width: 290px;
			height: 500px;
			background-image: url("paciente.png");
			-webkit-animation: carteiro 0.9s steps(6, end) infinite;
		}
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
							<form name="form" method="post" action="sys/salvar_resposta.php">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
							<div class="column column-4 color3">
								<h1  style="color:#fff;">Olá! <?php echo $nome; ?></h1>
								<img src="images/medico/medico.png" height="470" width="250">
								<h2  style="color:#fff;">Médico</h2>
							</div>
							<div class="column column-4 color9">

							<!--pergunta1-->
							<?php
							    $pegaUsuarios = BD::conn()->prepare("SELECT DISTINCT(pergunta) FROM perguntas");
							    $pegaUsuarios->execute();
							    $i=1;
							 
								while($row = $pegaUsuarios->fetch()){
									   if ($i==1) {
							    	$class = "info";
							    	$sub_class = "aparecer";
							    }else{
							    	$class = "info_encond";
							    	$sub_class = "esconder";
							    }
									
									$pergunta = $row['pergunta'];
							?>
							<!--inicio-->
								<div class="<?php echo $class;?>" id="pergunta<?php echo $i; ?>">
									<div class="<?php echo $sub_class; ?>" id="sub_pergunta<?php echo $i; ?>">
										<?php
if ($i>1) {
	

										?>
										<img src="images/direita.png" height="20" width="15" class="seta" onclick="informacao('pergunta<?php echo $i; ?>','sub_pergunta<?php echo $i;?>','pergunta<?php echo $i-1;?>','sub_pergunta<?php echo $i-1;?>')">
										<?php
										}
										?>
										<h1 id="alingtext" style="color:#1D2C4B;"><?php echo utf8_encode($pergunta)	; ?></h1>
										<?php
										$pegaUsuarios2 = BD::conn()->prepare("SELECT id,alternativa,resposta_correta FROM perguntas WHERE pergunta='$pergunta' ");
									    $pegaUsuarios2->execute();
										while($row2 = $pegaUsuarios2->fetch()){	
											$id = $row2['id'];
											$alternativa = utf8_encode($row2['alternativa']);
											$resposta    = $row2['resposta_correta'];
										?>
										<p class="font"><input type="radio" id="resposta_<?php echo $i; ?>" name="resposta_<?php echo $i; ?>" style="cursor: pointer;" value="<?php echo $id; ?>" required="required"/><?php echo $alternativa ?></p>
										<?php
										}
										$qtd = $pegaUsuarios->rowCount();
								if ($qtd == $i) {
								# code...
								 echo "<button class='btn btn-messenger' class='buton' style='width: 50%;margin-top: 5px;border-radius: 10px;float:left'>Terminar Avaliação</button>";
							}else{
										?>
										<a class="btn btn-messenger" onclick="informacao('pergunta<?php echo $i; ?>','sub_pergunta<?php echo $i; ?>','pergunta<?php echo $i+1; ?>','sub_pergunta<?php echo $i+1; ?>')">Responder</a>
										<?php
}
										?>
									</div>
								</div>
								<!--fim-->
								<?php
								$i++;
							
								}
							?>
						   </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--FIM DO CONTEINER-->


		<!--ALERTA-->
		<!--INICIO-->
		<div id="abrirmodal_alert" class="modalDialog">
			<div class="container"style="width: 30%;">
				<div class="content">
					<div class="row">
						<a href="#fechar" title="Fechar" class="fechar" style="color:#fff">X</a>
						<div >
							<div class="column column-12">
								<div class="tit" style="color:#000">
									<h1 class="tit" style="color:#000">Voce não está logado</h1>
								</div>
								<div style="color:#000;text-align: left;line-height: 25px;position: relative;float: left;">
									<b>Efetue o cadastro ou realize o login no sistema</b>
								</div>
								<a href="cadastro.php" class="btn btn-primary" style="width: 100%;margin-top: 5px;">Ok!</a>
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