<?php
  session_start();
  include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carregando...</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loading">
        <div class="spinner">
            <div class="porcent">100%</div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
