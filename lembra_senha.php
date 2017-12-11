
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
		<br><br>
		<section class="separation">
			<div class="container">
				<div class="content">
					<div class="row">
						<div class="column column-4">	
							<br><br>
							<h1 class="text_grande">NÃO SE PREOCUPE!</h1>
							<br>
						</div>
						<div class="column column-3" style="background: #fff;height: 240px;border-radius: 10px;padding: 10px 25px">
							<form name="form" method="post" action="sys/funcao_acesso.php">
								<h1 class="text" style="color:#000">Esqueceu sua senha?</h1>
								<input type="email" name="email" id="email" class="form-control" placeholder="Digite seu Email" style="border-radius: 10px;border:2px solid #e1e8ed;margin-top: 10px;" required="required"/>
								<br>
								<button class="btn btn-messenger" class="buton" style="width: 70%;margin-top: 15px;border-radius: 10px;float:left">Relembrar Senha</button>
								<br><br><br><br><br>
								<a style="color:#000;font-size: 12px;float: left">ou volte para a página de <a href="login.php" style="color:#12bbac;font-size: 12px;float: left;margin-left: 5px"> login</a>.</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>


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
	</div>

	<!-- JS App -->
	<script src="js/script.min.js"></script>


</body>