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
	

	<main id="corpo_campeonato">

		<div>
							<h1>
								Campeonatos Disponíveis
							</h1>
									
							<p>
								Os campeonatos disponíveis em nossa rede social FootBook são cadastrados pelos nossos administradores e atualizados sempre que tiver algo novo. Nessa página você poderá se informar sobre tudo que rola no futebol amador de Porto Alegre e assim programar sua equipe para disputar-los. As informações dos campeonatos a seguir são coletados diretamente dos organizadores e não nos responsabilizamos por algum constrangimento referente a cancelamentos, erros e etc, estamos disponibilizando essa parte da nossa rede social apenas para divulgar e assim ajuda-los.

								<p>Desejamos bons jogos!</p>
							</p>


							<h2>Liga da Redenção</h2>
								
							<p>
								Esse campeonato está sendo organizado pela Liga da Redenção com apoio da Prefeitura Municipal de Porto Alegre. Ainda restão 12 vagas para preencher e todos os jogos serão no Campo da Redenção em Porto Alegre RS. Horários e datas ainda estão para serem definidos.
							</p>
					</div>
	
				<div id="tabelas">
					
					<div class="tabela_left" >
							
							<h2>Tabela das Equipes Participantes</h2>
							
						<table border="3px" style="text-align:center; width:100%; border:groove; font-size: 25px; ">

							

							<tr> <th>Equipes</th> <th>Local</th> <th>Valor por Equipe</th> 
							
							<tr> 
							<td> Cermarca </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>

							<tr> 
							<td> Meninos da Vila </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>
							
							<tr> 
							<td> Grupo Um </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>

							<tr> 
							<td> Guarani FC </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>

							<tr> 
							<td> Nacional </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>

							<tr> 
							<td> Raizes </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>

							<tr> 
							<td> Força Jovem </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>

							<tr> 
							<td> Sema </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>

							<tr> 
							<td> Scal Futsal </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>

							<tr> 
							<td> Nação </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>

							<tr> 
							<td> São José </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>

							<tr> 
							<td> Paineira FC </td>  <td>Campo da Redenção</td> <td>R$ 200,00</td> 
							</tr>
					</table>	

		</div>
		
				<div class="tabela_right" >
							
							<h2>Tabela do Liga</h2>

					<table border="3px" style="text-align:center; width:100%; border:groove; font-size: 25px;">
					
							

							<tr>
							<th>Equipes</th> <th title="Jogos">J</th> <th title="Pontos">P</th> <th title="Vitórias">V</th> <th title="Empates">E</th> <th title="Derrotas">D</th> <th title="Gols Pró">GP</th> <th title="Gols Contra">GC</th> <th title="Cartão Amarelo">CA</th> <th title="Cartão Vermelho">CV</th> <th title="Saldo de Gols">SG</th>

							<tr> 
							<td> Cemarca </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
							</tr>

							<tr> 
							<td> Meninos da Vila </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
							</tr>
							
							<tr> 
							<td> Grupo Um </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
							</tr>

							<tr> 
							<td> Guarani FC </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
							</tr>

							<tr> 
							<td> Nacional </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
							</tr>

							<tr> 
							<td> Raízes </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
							</tr>

							<tr> 
							<td> Força Jovem </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
							</tr>

							<tr> 
							<td> Sema </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
							</tr>

							<tr> 
							<td> Scal Futsal </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
							</tr>

							<tr> 
							<td> Nação </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
							</tr>

							<tr> 
							<td> São José </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
							</tr>

							<tr> 
							<td> Paineira FC </td>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>

							</tr>
					

					</table>
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
