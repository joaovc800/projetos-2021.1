<?php
  session_start();
  include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wit Solutions | Contato</title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Wit Solutions empresa de web segurança, sua empresa está segura?">
    <meta property="og:image" content="logo1.0.png">
    <meta property="og:description" content="Wit Solutions empresa de web segurança, sua empresa está segura?">
    <meta property="og:title" content="Wit Solutions">
    <link rel="stylesheet" href="home.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="logo2.0.png"/>
  </head>
  <body>
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid menu">
          <a class="navbar-brand" href="menu.php" title="Home"><img src="sec.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="sobre.php">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="contato.php">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Serviços e suporte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="planos.php">Planos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="covid-19.php">COVID-19</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
       <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6055fd65f7ce182709321f12/1f17ubljp';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
            <!--End of Tawk.to Script-->
    </header>
    <div class="container">
        <div class="py-5 text-center">
          <h2>Formulário de contato</h2>
          <p class="lead">Deixe sua mensagem e o mais rápido possivel retornaremos o contato! Não se preocupe sua empresa nunca estará desprotegida com a <span class="text-muted fw-bold">Wit Solutions</span></p>
        </div>
        <div class="container">
            <h4 class="mb-3">Dados para contato</h4>
            <form class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Nome completo</label>
                  <input type="text" class="form-control" id="firstName" placeholder="Nome completo" value="" required>
                  <div class="invalid-feedback">
                    Valid name is required.
                  </div>
                </div>
                <div class="col-sm-6">
                  <label for="username" class="form-label">E-mail</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Digite seu e-mail" required>
                  <div class="invalid-feedback">
                      Your e-mail is required.
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Assunto</label>
                  <input type="email" class="form-control" id="email" placeholder="Digite o assunto">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
                <div class="col-12">
                  <label for="address" class="form-label">Telefone</label>
                  <input type="text" class="form-control" id="address" placeholder="DDD + Número" required>
                  <div class="invalid-feedback">
                    Please enter your Telefone.
                  </div>
                </div>
                <div class="col-12">
                  <label for="address2" class="form-label">Telefone 2 <span class="text-muted">(Opcional)</span></label>
                  <input type="text" class="form-control" id="address2" placeholder="DDD + Número">
                </div>
                <div class="col-12">
                    <textarea class="form-control" placeholder="Deixe seu comentário" id="floatingTextarea"></textarea>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
              </div>
              <hr class="my-4">
              <button class="w-100 btn btn-primary btn-lg mb-4" type="submit">Enviar</button>
            </form>
          </div>
        </div>
         <footer class="footer mt-auto py-3 bg-light">
          <div class="container">
            <span class="text-muted">Central de atendimento  (0800-889-4000)</span><br>
            <span class="text-muted">E-mail para contato (witsolutions.crm@outlook.com)</span>
          </div>
        </footer> 
      <div class="container-fluid" style="background-color: #293d55">
        <footer class="container py-3" style="background-color: #293d55">
          <div class="row">
            <div class="col-6 col-md">
              <h5 class="text-light">Features</h5>
              <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Segurança</a></li>
                <li><a class="link-secondary" href="#">Web</a></li>
                <li><a class="link-secondary" href="#">Firewall</a></li>
                <li><a class="link-secondary" href="#">Para desenvolvedores</a></li>
                <li><a class="link-secondary" href="#">Data center</a></li>
                <li><a class="link-secondary" href="#">Link up</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5 class="text-light">Resources</h5>
              <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Planos</a></li>
                <li><a class="link-secondary" href="#">Contatos</a></li>
                <li><a class="link-secondary" href="#">Sobre</a></li>
                <li><a class="link-secondary" href="#">Compras</a></li>
              </ul>
              </div>
              <div class="col-6 col-md">
                <h5 class="text-light">About</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="link-secondary" href="#">Equipe</a></li>
                  <li><a class="link-secondary" href="#">Localizações</a></li>
                  <li><a class="link-secondary" href="#">Privacidade</a></li>
                  <li><a class="link-secondary" href="#">Termos</a></li>
                </ul>
              </div>
              <div class="col-6 col-md ">
                <h5 class="text-light">Social networks</h5>
                <ul class="list-inline text-small">
                  <li class="list-inline-item"><a class="link-secondary " href="#" title="Facebook"><img src="facebook.png" class="icon"></a></li>
                  <li class="list-inline-item"><a class="link-secondary " href="#" title="Instagram"><img src="instagram.png" class="icon"></a></li>
                  <li class="list-inline-item"><a class="link-secondary " href="#" title="Whatsapp"><img src="wpp.png" class="icon"></a></li>
                  <li class="list-inline-item"><a class="link-secondary " href="#" title="Twitter"><img src="twitter.png" class="icon"></a></li>
                </ul>
              </div>
          </div>
      </div>
      <div class="container-fluid mt-auto py-3 bg-dark">
        <div class="container">
          <p class="text-light text-center p-2"><small>Wit Solutions CRM. | CNPJ 54.321.458/0001-03</small></p>
          <p class="text-light text-center p-2"><small>Av. Tietê 2141, Torre E 10º andar - São paulo</small></p>
          <p class="text-light text-center p-2"><small>Formas de pagamento aceitas: cartões de crédito (Visa, MasterCard, Elo e American Express) e boleto.</small></p>
          <div class="container">
            <hr class="featurette-divider bg-light">
          </div>
          <p class="text-light text-center p-2"><small>&copy 2021, todos os direitos reservados</small></p>
        </div>
      </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
