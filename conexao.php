<?php
$host="us-cdbr-east-03.cleardb.com";
$port=3306;
$socket="";
$user="be8ee029d0a7f0";
$password="634edcf8";
$dbname="heroku_3f91cda5aaca95a";

$conexao = mysqli_connect($host, $user, $password, $dbname, $port, $socket)
	or die ('Não foi possivel conectar com o banco' . mysqli_connect_error());
