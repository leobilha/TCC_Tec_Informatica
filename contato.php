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
	

	<main id="corpo_contato">
		
		<div class="formulario">

			<div id="form1">

			<h1>
				Envia-nos sua dúvida preenchendo os campos abaixo!
			</h1>

			<p>O Footbook disponibiliza diversos canais de atendimento. Preencha o Formulário abaixo, e envie sua mensagem. Em breve retornaremos!</p>
			</div>

			<div id="form2">
				<form method="POST" action="recebe_contato.php">
				
				<label>Seu Nome</label>
				</br>
				<input type="text" name="nome" placeholder="Digite seu Nome...">
				</br>
				<label>Seu Telefone</label>
				</br>
				<input type="number" name="telefone" placeholder="Digite seu Telefone...">
				</br>
				<label>Seu E-mail</label>
				</br>
				<input type="text" name="email" placeholder="Digite seu e-mail...">
				</br>
				<label>Sua Mensagem</label>
				</br>
				<textarea name="mensagem" cols="50" rows="15" placeholder="Digite sua mensagem..."></textarea>
				</br>
				<button type="submit">Enviar</button>

				</form>
			</div>
			
			<div id="form3" ">

				<img src="imagens/telefone_contato.png">
				<img src="imagens/endereco_contato.png">
			
		
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
