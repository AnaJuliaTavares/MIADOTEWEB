<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<header>
		<h1>Agradecemos por seu Cadastro</h1>
		<h3></h3>
	</header>

    <?php


require_once('conexao.php');

$usuario = $_POST['usuario'];
$nome = $_POST['name'];
$sobrenome = $_POST['lastname'];
$email =  $_POST['email']; 
$numero = $_POST['number'];
$senha = $_POST['password'];
$ConfirmarSenha = $_POST['confirmpassword'];

$bancoDados = new db();

$link = $bancoDados-> conecta_mysql();

$sql = "insert into miadote (usuario,name,lastname,email,number, password,confirmpassword) values('$usuario', '$nome','$sobrenome','$email','$numero','$senha', '$ConfirmarSenha')";

mysqli_query($link,$sql);


?>

<section>
	<h2> Muito obrigado por seu cadastro </h2><br><br>
	<a href="login.html"> << VOLTAR </a>
    <a href="cadastro.html"> << VOLTAR </a>

</section>
</body>
</html>
