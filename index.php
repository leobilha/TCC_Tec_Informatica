<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>HOME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	
	<div id="cabecalho_fundo">
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
	</div>			
	

	<main id="corpo_tela_index">

		<section id="destaque">
			<div id="central"> 
			<h2> Bem Vindo ao FOOTBOOK! </h2>
		</div>
		</section>

		<article class="passe"></article>
		<article class="passe"></article>
		<article class="passe"></article>
		<article class="passe"></article>

		<div id="corpo_index">
			
			<p>Desistir de uma partida por falta de coragem é como ir para a guerra derrotado. Você precisa acreditar que sairá vencedor. </p>
			
				
			<div id="slider">
				<ul class="bxslider">
					<li>
						<a href=""><img src="imagens/noticia3.png"></a>
					</li>

					<li>
						<a href=""><img src=""></a>
					</li>
					
					<li>
						<a href=""><img src=""></a>
					</li>
					

				</ul>

			</div> 

		</div>




		<script>
			$(document).ready(function(){
			$('.bxslider').bxSlider();
			$(".fancybox").fancybox();
		});
		</script>

				
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