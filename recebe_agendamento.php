<?php
	session_start(); //ENVIAR OS AGENDAMENTOS PARA O BANCO


//Criar variáveis
$equipe = $_SESSION['login'];
$equipeAdversaria = $_POST['equipeAdversaria'];
$data = $_POST['dataJogo'];
$hora = $_POST['horarioJogo'];

//conexao com o banco
$conexao = new PDO("mysql:host=localhost; dbname=footbook; charset=utf8", "root", "");

//prepara consulta
$consulta = $conexao->prepare("INSERT INTO agendamento (login, equipeAdversaria, hora, data) VALUES (?,?,?,?)");

//envia para o banco
$consulta->execute(array($equipe, $equipeAdversaria, $hora, $data));

$resultado =  $consulta->rowCount();


if($resultado == true) {
	echo "<h1>Jogo agendado com sucesso!</h1>";
} else {
	echo "<h1>Erro ao agendar jogo<span>Tente Novamente<span></h1>";
}


?>