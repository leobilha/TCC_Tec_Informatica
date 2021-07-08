<?php

// Inicia a sessão do usuário
session_start();


$login = $_POST['login'];
$senha = sha1($_POST['senha']);

$redirecionamento = "href:perfil.php";

//conexão com banco de dados
$conexao = new PDO("mysql:host=localhost; dbname=footbook; charset=utf8", "root", ""); 

//prapara a consulta
$consulta = $conexao->prepare("SELECT * FROM cadastro WHERE login = ? AND senha = ?");

//envia para o banco de dados
$consulta->execute(array($login, $senha));



//Captura o resultado da consulta
$resultado = $consulta->fetchAll();




if($resultado) {
	$_SESSION['login'] = $login;
	header("Location: perfil.php");
} else {
	echo "<h1>Login ou senha incorretos</h1>";
}





?>