<?php

 include ("../cabecalho.html");

 $method = $_SERVER["REQUEST_METHOD"];

echo $method."<br>";

if ($method == "POST") {
   
	$hostname = "localhost";
	$nameuser = "root";
	$password = "";
	$database = "plexdb";

	$link = mysqli_connect($hostname, $nameuser, $password, $database);

   echo "<h2>Bem vindo ao Plex Tarefas</h2>";

}else {
	echo "<h2>O banco de dados não pode ser acessado. Por favor clique no link abaixo para voltar para o formulario:</h2>";
}

?>


   <a href="../index.html">HOME</a>

   <?php include ("../footer.html"); ?>