<?php
  session_start();
  include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wit Solutions | Aprovação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="Wit Solutions empresa de web segurança, sua empresa está segura?">
    <meta property="og:image" content="logo1.0.png">
    <meta property="og:description" content="Wit Solutions empresa de web segurança, sua empresa está segura?">
    <meta property="og:title" content="Wit Solutions">
    <link rel="stylesheet" href="planos.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="wit.png"/>
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
                <a class="nav-link" aria-current="page" href="planos.php">Planos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="covid-19.php">COVID-19</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="logout.php">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main class="px-3">
        <h1 class="text-center display-4">Dados  em  análise</h1>
        <p class="lead text-center">Por gentileza aguarde entre 24 a 48 horas para verificarmos a  aprovação do pagamennto</p>
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4">Aqui você verá seu rastreio e em pouco tempo já podera desfrutar de nossos experts </h1>
                <p class="lead my-3">Com a wit solutions você terá a melhor assistência técnica e proteção garantida a sua empresa e seus clientes</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">confira aqui</a></p>
            </div>
        </div>
    </main>
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
          <p class="text-light text-center p-2"><small>Formas de pagamento aceitas: cartões de crédito (Visa, MasterCard e American Express)</small></p>
          <div class="container">
            <hr class="featurette-divider bg-light">
          </div>
          <p class="text-light text-center p-2"><small>&copy 2021, todos os direitos reservados</small></p>
        </div>
      </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
