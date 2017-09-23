<?php
	include("conecta.php");

	$recnome = $_GET["nome"];
	$recemail = $_GET["email"];
	$recassunto = $_GET["assunto"];
	$recmenssagem = $_GET["mensagem"];

	mysqli_query($conexao, "INSERT INTO contato (nome, email, assunto, mensagem) VALUES ('$recnome', '$recemail', '$recassunto', 'recmenssagem')");

	header("location:lista.php");
?>