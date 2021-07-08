<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="imagens/icon.png" type="image/png" sizes="16x16">
	<meta name="description" content="Projeto Final">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">

	<!-- Jquey 
	<script type="text/javascript" src="jquery/jquery-3.0.0.js"></script> VERSÃO NOVA-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- Java script do plugin bxslider -->
	<script type="text/javascript" src="jquery/bxslider/jquery.bxslider.min.js"></script>
	<!-- CSS do bxslider -->
	<link rel="stylesheet" type="text/css" href="jquery/bxslider/jquery.bxslider.css"></head>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="jquery/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="jquery/fancybox/source/jquery.fancybox.pack.js"></script>

</head>
<body>
	
	<header id="cabecalho">
		<div id="logo">
			<a href="index.html" title="logo">
				<img src="imagens/logo.png" alt="logo">
			</a>
		</div>

		
		<nav id="menu_principal"> 
			<?php
				require_once("menu.php");
			?>
			
			</nav>
			<div id="busca">
				<span id="login">LOGIN</span>
				<span id="cadastro">CADASTRO</span>			
			</div>

		</header>		
	

	<main id="corpo">
		<div id="corpo_sobre">
			<div id="apresentacao_sobre">
				<h6>SOBRE O FOOTBOOK</h6>
				<imgsrc="imagens/enfeitetitulo.png">
								
			</div>	

			<div id="informacao_sobre">
				<h3>PROJETO</h3>
				<p>O projeto Footbook foi feito para facilitar a organização do futebol amador, onde se pode agendar jogos, organizar fotos da equipe, ver notícias de campeonatos que estão rolando em sua região e etc.</p>
				</br>
				<h3>MISSÃO</h3>
				<p>Oferecer uma organização de sua equipe as pessoas que gostam de pratica o esporte com responsabilidade e compromisso.</p>
				</br>
				<h3>VISÃO</h3>
				<p>Ser um site disseminado por todo o estado.</p>
				</br>
				<h3>VALORES</h3>
				<p>Princípios de comprometimento com as equipes. ; Acessível (informações sobre jogos agendados).</p>
				</br>
				<h3>REFERÊNCIAS</h3>
				<p>Trabalho de conclusão para o curso técnico de informática do Senac RS, orientado pelo professor Adalto Sparremberger e Guaraci Balestrin. </p>
				</br>
				

			<img src="imagens/senac.png">

			</div>					

	</div>	

				
	</main>

	<?php
	 	require_once("login.php");
	?>

	<?php
	 	require_once("cadastro.php");
	?>

	
	<footer id="rodape">
		<?php
			require_once("footer.php");
		?>
		
	</footer>

</body>
</html>
