<?php
	
	
	
	//conexao com o banco
	$conexao = new PDO("mysql:host=localhost; dbname=footbook; charset=utf8", "root", "");
	//prepara consulta
	$consulta = $conexao->prepare("SELECT * FROM perfil WHERE login='login'");
	$consulta->execute();
	$resultado = $consulta->fetchALL(); //Retorna todos os dados da consulta.

	foreach ($resultado as $key => $valor) {
		echo $valor['lema'] . "<br/>"; //Todos os dados da coluna nome do banco	
		echo $valor['tecnico'] . "<br/>"; 
		echo $valor['capitao'] . "<br/>"; 
		echo $valor['fundacao'] . "<br/>"; 
		
	}


	?>