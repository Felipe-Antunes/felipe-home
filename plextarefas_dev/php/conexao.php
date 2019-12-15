<?php

  include ("../cabecalho.html");

$method = $_SERVER["REQUEST_METHOD"];

echo $method."<br>";

if ($method == "POST") {

	echo "<h1>Veja suas informações abaixo</h1>";

	$email = $_POST["login"];
	$senha = $_POST["senha"];

	$hostname = "localhost";
	$nameuser = "root";
	$password = "";
	$database = "plexdb";

	$conexao = mysqli_connect($hostname, $nameuser, $password, $database);

   echo "<h2>Bem vindo ao Plex Tarefas</h2>";

}else {
	echo "<h2>O banco de dados não pode ser acessado. Por favor clique no link abaixo para voltar para o formulario:</h2>";
}

	echo "<h2>E-Mail: $email</h2>";
	echo "<h2>Senha: $senha</h2>";


?>

   <a href="../index.html">HOME</a>

   <?php include ("../footer.html"); ?>