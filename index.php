<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
  </head>
  <body>
    <section class="form-section">
      <h1>Login Wit Solutions</h1>

      <div class="form-wrapper">
        <form action="login.php" method="POST">
          <div class="input-block">
            <label for="login-email">Usuário</label>
            <input name="usuario" type="text" id="login-email" />
          </div>
          <div class="input-block">
            <label for="login-password">Senha</label>
            <input name="senha" type="password" id="login-password" />
          </div>
          <button type="submit" class="btn-login">Login</button>
          <a href="criarconta.php">cadastre-se</a>
        </form>
      </div>
    </section>
    <ul class="squares"></ul>
    <script src="script.js"></script>
  </body>
</html>
