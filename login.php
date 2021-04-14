<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']); // primeiro puxa a conexao depois o usuario e proteje contra SQL injection
$senha = mysqli_real_escape_string($conexao,$_POST['senha']); // primeiro puxa a conexao depois a senha e proteje contra SQL injection

$queryBuscarUsuario = "SELECT username FROM usuarios WHERE username = '{$usuario}' AND password = MD5('{$senha}');";

$resultado = mysqli_query($conexao,$queryBuscarUsuario); // abre a conexão e execulta a query

$row = mysqli_num_rows($resultado); // se encontrar o resultado ela vai retornar true que é igual à 1

if($row == 1){
    $usuario_bd = mysqli_fetch_assoc($resultado);
    $_SESSION['usuario'] = $usuario_bd['usuario']; //autenticado armazena a sessão na variavel usuario
    header('Location: menu.php'); //leva para pagina desejada
    exit(); // fecha os cabeçalhos
}
else{
    header('Location: index.php'); // se não estiver autenticado ela volta para index
    exit();
}
