<?php
	
	
	//conexao com o banco
	
	$conexao = new PDO("mysql:host=localhost; dbname=footbook; charset=utf8", "root", "");
	
	//prepara consulta
	$consulta = $conexao->prepare("SELECT * FROM perfil");
	$consulta->execute();
	$resultado = $consulta->fetchALL(); //Retorna todos os dados da consulta.
	
	foreach ($resultado as $key => $valor) {			 
			echo "<article><img ' src='uploads/{$valor['imgEquipe']}'></article>";

			
	}


	?>