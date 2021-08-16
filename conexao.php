<?php
$host="localhost";
$user="root";
$password="";
$dbname="wit";

$conexao = mysqli_connect($host, $user, $password, $dbname) or die ('Não foi possivel conectar com o banco•' . mysqli_connect_error());

// arruma a acentuação
mysqli_query($conexao,"SET NAMES 'utf8'");  
mysqli_query($conexao,'SET character_set_connection=utf8');
mysqli_query($conexao,'SET character_set_client=utf8');  
mysqli_query($conexao,'SET character_set_results=utf8'); 
?>
