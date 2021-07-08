<?php
	session_start();
	if (!isset($_SESSION['login'])) { //Ponto de exclamação nega a condição
		header("Location: index.php");
		exit; //Interrompe o código
	}

?> 

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

	<div id="corpo_perfil"> 

		<div id="menu_perfil">
			<form method="POST" action="recebe_perfil.php" enctype="multipart/form-data">
			<h3>CADASTRE OS DADOS ABAIXO</h3>
			<h6>ATENÇÃO: Imagem do símbolo e da equipe são obrigatórios!</h6>
			
				<div id="simbolo">
				<label>Selecione uma foto do símbolo</label>
				<input type="file" name="img_simbolo"></div>
				
				<div id="equipe">
				<label>Selecione uma foto da equipe</label>				
				<input type="file" name="img_equipe"></div>

				<div id="questionario">					

					<label>Lema: </label>
					<br/>
					<input type="text" name="lema" placeholder="Informe o lema da equipe...">
					<br/>

					<label>Técnico: </label>
					<br/>
					<input type="text" name="tecnico" placeholder="Informe o nome do técnico...">
					<br/>

					<label>Capitão: </label>
					<br/>
					<input type="text" name="capitao" placeholder="Informe o nome do capitão...">
					<br/>

					<label>Fundação: </label>
					<br/>
					<input type="date" name="fundacao"  placeholder="Informe a data de fundação...">
					<br/>

					<button type="submit">Enviar</button>
				</div>

				<div id="impDadosMenu">
					<h5>DADOS CADASTRADOS</h5>
					<button>Editar</button> <!-- CONFIGURAR BOTÃO NO BANCO -->
					<br/>


					<?php

	//conexao com o banco
	$conexao = new PDO("mysql:host=localhost; dbname=footbook; charset=utf8", "root", "");

	//prepara consulta
	$consulta = $conexao->prepare("SELECT * FROM perfil WHERE login = ?");
	$consulta->execute(array($_SESSION['login']));
	$resultado = $consulta->fetchALL(); //Retorna todos os dados da consulta.
	foreach ($resultado as $key => $valor) {
		echo "<img ' src='uploads/{$valor['imgSimbolo']}'>" . "<br/>";	
		echo "<img ' src='uploads/{$valor['imgEquipe']}'>" . "<br/>";	
		echo "<h3>Lema: </h3>" . $valor['lema'] . "<br/>"; 
		echo "<h3>Técnico: </h3>" . $valor['tecnico'] . "<br/>"; 
		echo "<h3>Capitão: </h3>" . $valor['capitao'] . "<br/>"; 
		echo "<h3>Fundação: </h3>" . $valor['fundacao'] . "<br/>"; 
		
	}


	?>
				</div>

			</form>
			
		</div>

		

		<div id="infPerfil">


			<div id="dadosImp"> 
				<h1>Bem Vindo</h1> 
				<p>Essa é a página onde você pode configurar e controlar o perfil do time. É de extrema importancia que você cadastre os dados pedidos ao lado esquerdo superior da tela, pois serão mostrados nos jogos agendados, campeonatos cadastrados e na tela de equipes. Bom proveito! Qualquer dúvida entre em contato com o administrador geral através dos contatos.</p>
			</div>
			<div id="dadosAgenda">

				<div id="titulo"> 
			<h1>SEUS JOGOS</h1>
</div>
				<?php

	//conexao com o banco
	$conexao = new PDO("mysql:host=localhost; dbname=footbook; charset=utf8", "root", "");

	//prepara consulta
	$consulta = $conexao->prepare("SELECT * FROM agendamento WHERE login = ?");
	$consulta->execute(array($_SESSION['login']));
	$resultado = $consulta->fetchALL(); //Retorna todos os dados da consulta.
	foreach ($resultado as $key => $valor) {
		echo $valor['login'] . " vs " . $valor['equipeAdversaria'] . " (" . $valor['data'] . " * " . $valor['hora'] . ") " . "<br/>";		
	}


	?>

			</div>

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