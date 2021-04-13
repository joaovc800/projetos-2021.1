<?php
$host = 'us-cdbr-east-03.cleardb.com';
$usuario = 'be8ee029d0a7f0';
$senha = '634edcf8';
$db = 'heroku_3f91cda5aaca95a';

$conexao = mysqli_connect($host,$usuario,$senha,$db) or die ('Não foi possivel conectar com o banco');
