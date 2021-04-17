<?php
session_start();
include("conexao.php");

if(empty($_POST['nome']) || empty($_POST['usuario']) || empty($_POST['senha1']) || empty($_POST['senha2'])){
	$_SESSION['usuario_invalido'] = true;
	header('Location: criarconta.php');
    exit();
}

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha1 = mysqli_real_escape_string($conexao, trim($_POST['senha1']));
$senha2 = mysqli_real_escape_string($conexao, trim($_POST['senha2']));

if($senha1 != $senha2){
	$_SESSION['senha_nao_corresponde'] = true;
	header('Location: criarconta.php');
}
	

$sql = "select count(*) as total from usuarios where username = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: criarconta.php');
	exit;
}

$sql = "INSERT INTO `heroku_3f91cda5aaca95a`.`usuarios` (id, nome, username, password) VALUES (NULL,'$nome', '$usuario', '$senha2')";
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: criarconta.php');
exit;
?>
