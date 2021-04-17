<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cadastrar</title>
    <link rel="stylesheet" href="style.css" />
    
  </head>
  <body>
    <section class="form-section">
      <h1>Cadastre-se</h1>
      <div class="form-wrapper">
      <?php
        if($_SESSION['status_cadastro']):
        ?>
        <div>
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
        <div>
            <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['usuario_existe'])
        ?>
        <?php
        if($_SESSION['usuario_invalido']):
        ?>
        <div>
            <p>Nenhum campo pode ficar vázio</p>
        </div>
        <?php
        endif;
        unset($_SESSION['usuario_invalido'])
        ?>
        <?php
        if($_SESSION['senha_nao_corresponde']):
        ?>
        <div>
            <p>Senhas não correspondem</p>
        </div>
        <?php
        endif;
        unset($_SESSION['senha_nao_corresponde'])
        ?>
        <form action="cadastrar.php" method="POST">
            <div class="input-block">
                <label for="login-email">Nome completo</label>
                <input name="usuario" type="text" id="login-email" />
            </div>
            <div class="input-block">
                <label for="login-email">Usuário</label>
                <input name="usuario" type="text" id="login-email" />
            </div>
            <div class="input-block">
                <label for="login-password">Senha</label>
                <input name="senha1" type="password" id="login-password" />
            </div>
            <div class="input-block">
                <label for="login-password">Senha</label>
                <input name="senha2" type="password" id="login-password" />
            </div>
          <button type="submit" class="btn-login">Cadastrar</button>
          <a href="index.html">Voltar</a>
        </form>
      </div>
    </section>
    <ul class="squares"></ul>
    <script src="script.js"></script>
  </body>
</html>
