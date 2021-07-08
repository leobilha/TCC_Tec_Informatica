<?php

	//PREENCHER SELECT COM LOGINS EXISTENTES NO BANCO

	#Estabelecemos conexão com o banco de dados
	mysql_connect('localhost','root','') or die(mysql_error());

	#seleciona o banco de dados
	mysql_select_db('footbook') or die(mysql_error());	

	#Correção erros de ortografia
	header('Content-Type: text/html; charset=utf-8');
	mysql_connect('localhost','root','');
	mysql_select_db('footbook');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');


?>