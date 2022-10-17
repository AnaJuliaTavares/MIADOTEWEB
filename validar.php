<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		border: 0;
	}
	html{
		font-family: arial;
		font-size: 62.5%;
	}
	header{
		background-color: rgba(0,139,139);
		color: rgba(255, 255, 255, 1.0);
		padding: 5px;
		text-align: center;
		text-shadow: 1px 1px 2px rgba(0, 0, 0, 1.0);
	}
	footer{
		background-color: rgba(0,139,139);
		color: rgba(255, 255, 255, 1.0);
		padding: 5px;
		text-align: center;
		text-shadow: 1px 1px 2px rgba(0, 0, 0, 1.0);
	}
	body{
		text-align: center;
		font-size: 1.6rem;
	}
	label{
		font-weight: bold;
		font-size: 1.8rem;
	}
	input{
		font-size: 1.7rem;
		text-align: center;
		border: solid;
		border-radius: 5px;
		padding: 5px;
		width: 47%;
	}
	.botao{
		width: 20%;
		background-color: rgba(200, 255, 150, 1.0);
		color: rgba(0, 0, 0, 1.0);
		text-shadow: 2px 2px 5px rgba(255, 255, 255, 1.0);
		font-weight: bold;
		font-size: 1.8rem;

	}


</style>	

<body>

	<header>
		<h1>Agradecemos por seu Cadastro</h1>
		<h3>Em breve você receberá nossos cupons de Desconto</h3>
	</header>

<?php

   require_once('conexao.php');

   $usuario = $_POST['usuario'];

   $email =  $_POST['email'];

   $senha = $_POST['senha']; 

   $bancoDados = new db();

   $link = $bancoDados-> conecta_mysql();

   $sql = "insert into usuarios (usuario,email,senha) values('$usuario', '$email', '$senha')";

   mysqli_query($link,$sql);

?>

<section>
	<h2> Muito obrigado por seu cadastro </h2><br><br>
	<a href="index.php"> << VOLTAR </a>

</section>

	<footer>
		<h3>CURSO TÉCNICO EM INFORMÁTICA - IFAM</h3>
		<h3>DISCIPLINA:PROGRAMAÇÃO WEB </h3>
		<h3>AV. 7 DE SETEMBRO, 1975 - MANAUS - CENTRO</h3>		
	</footer>

</body>
</html>
