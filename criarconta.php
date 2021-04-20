<?php
session_start()
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" href="wit.png"/>
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body input-block" style="background-image:linear-gradient(-135deg, #D9880D, #FF9800,#208591,#33B6C4,#40D6E8);">
            <div class="container has-text-centered input-block">
                <div class="column is-4 is-offset-4 input-block">
                    <h1 class="title has-text-white">Cadastre-se</h1>
                    <?php
                    if($_SESSION['status_cadastro']):
                    ?>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro'])
                    ?>
                    <?php
                    if($_SESSION['usuario_existe']):
                    ?>
                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe'])
                    ?>
                    <?php
                    if($_SESSION['usuario_invalido']):
                    ?>
                    <div class="notification is-danger">
                        <p>Nenhum campo pode ficar vázio</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_invalido'])
                    ?>
                    <?php
                    if($_SESSION['senha_nao_corresponde']):
                    ?>
                    <div class="notification is-danger">
                        <p>Senhas não correspondem, por favor tente novamente!</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['senha_nao_corresponde'])
                    ?>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control input-block">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha1" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha2" class="input is-large" type="password" placeholder="Confirmar senha">
                                </div>
                            </div>
                             <div class="control">
                                   <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button><br>
                              </div>
                             <div class="text-center p-t-136">
				<a class="txt2" href="index.php">
				  Voltar
				  <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
				</a>
			     </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>
