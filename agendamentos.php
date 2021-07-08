<?php
	session_start();

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
			
	

	<main id="corpo_agendamento">

		<div class="apresentacao">
			<h1>
				Agendamento de Jogos
			</h1>

			<p>
				Bom, nessa página você poderá ver os jogos que foram agendados e também poder agendar um jogo contra outra equipe que está disponível, esse somente disponibilizado apenas a pessoas que possuem cadastro da sua equipe. A equipe que estiver disponível para jogos, estará sem equipe ao lado, sendo assim disponível a um amistoso.
			</p>
		</div>
		
			<?php
				
				if(isset($_SESSION['login'])) {



			?>


<form method="POST" action="recebe_agendamento.php">

	<div class="jogo" >
			
				
				<div class="adicionarEquipe"> <!-- IMPRIMIR SIMBOLO DA EQUIPE PARA AGENDAR -->
				<a name="minhaEquipe" href="">
					<?php

				//conexao com o banco
				$conexao = new PDO("mysql:host=localhost; dbname=footbook; charset=utf8", "root", "");

				//prepara consulta
				$consulta = $conexao->prepare("SELECT * FROM perfil WHERE login = ?");
				$consulta->execute(array($_SESSION['login']));
				$resultado = $consulta->fetchALL(); //Retorna todos os dados da consulta.

				foreach ($resultado as $key => $valor) {

					echo "<img width='250px;' heigth='250px;' src='uploads/{$valor['imgSimbolo']}'>" . "<br/>";	
				
					
				}


				?>	
				</a>			
				</div>

				<div class="imagemVs">
					<img src="imagens/iconVs.png">
				</div>

				<div id="right">

				<div class="selecione_e_botaoSalvar">

				<?php
						#chama o arquivo de configuração com o banco
						require 'consulta_agendamento.php';

						#seleciona os dados da tabela produto
						$query = mysql_query("SELECT id, login FROM cadastro");


						# abaixo montamos um formulário em html
						# e preenchemos o select com dados
						?>
					<div>
						 <label for="">Equipe Adversária: </label>
						 <select name="equipeAdversaria">
						 <option>Selecione...</option>
						 
						 <?php while($prod = mysql_fetch_array($query)) { 

						 	if ($prod['login'] == $_SESSION['login']){
						 		continue;
						 	}?>
						 <option value="<?php echo $prod['login'] ?>"><?php echo $prod['login'] ?></option>
						 <?php } 

							
						 ?>

						 
						 
						 </select>


					</div>				
				
				

				
				</div>

					<div id="btnSalvarAgendamento"> <button type="submit"">Salvar</button>	</div>
				</div>		
				<div class="dataHorario">
					<h3>Data </h3>
						<input type="date" name="dataJogo">

					<h3>Horário</h3>
						<input type="time" name="horarioJogo">
</div>	


	</form>
			
<?php
	}

?>
			


			
				


			<div class="jogoAgendado"> <!-- LISTA TODOS OS AGENDAMENTOS EXISTENTES NO BANCO -->
				<h1>Jogos Agendados</h1>

				<article id="teste_imprimir">
					<?php
		 				require_once("imprimir_agendamento.php");
					?>
				</article>

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
