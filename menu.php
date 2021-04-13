<?php
  session_start();
  include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wit Solutions | Home</title>
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
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="logout.php">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
      <div class="container-fluid" id="sli">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="app.png" alt="duas pessoas com um notebook">
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Wit Solutions</h1>
                  <p>Venha conhecer a melhor empresa de web segurança</p>
                  <p><a class="btn btn-lg btn-primary" href="sobre.php">Sobre</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="negocio.png" alt="ações subindo">
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Contato</h1>
                  <p>Está com duvidas ainda? entre em contato<span class=" fw-bold"> agora mesmo</span></p>
                  <p><a class="btn btn-lg btn-primary" href="contato.php">Contato</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="seguranca.png" alt="segurança cadeado">
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Planos</h1>
                  <p>Sua empresa está segura? adquira já seu pacote de plano mais seguro!</p>
                  <p><a class="btn btn-lg btn-primary" href="planos.php">Planos</a></p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="container featurette mt-4"">
        <h2>Eliminação da baixa 
          <span class="text-muted">vulnerabilidade</span>
        </h2>
        <p class="lead">Muitas empresas desperdiçam muito tempo tentando combater a
          ataques de invasores (hackers), assim como o avanço da tecnologia nos
          beneficia com novas técnicas e equipamentos, vem também o avanço
          contrário, isso porque crescem novos meios e táticas de hackers que
          podem ser prejudiciais futuramente, foi pensando na sua tranqüilidade
          que a nossa empresa desenvolveu um programa para detectar o nível de
          vulnerabilidade nos sistemas de nossos clientes.</p>
          <hr class="featurette-divider">
          <h2>Monitoramento
            <span class="text-muted">24hrs</span>
          </h2>
          <p class="lead">Ninguém está livre de ficar na mira de pessoas mal intencionadas na web,
          foi pensando nesta hipótese que a Wit Solutions, desenvolveu o melhor
          sistema de monitoramento, com profissionais com uma visão sobre o que
          está acontecendo em todo o sistema, além de estarem sempre fazendo
          uma varredura completa no sistema de segurança, nossos clientes
          sempre serão informado de forma IMEDIATA quando algo de errado é
          encontrado, com a mesma velocidade vem
          a solução com nossos coordenadores de rede, assim não só passamos o
          problema a quem de fato interessa, mas sim também a solução e os
          procedimentos a seguir.</p>
          <hr class="featurette-divider">
      </div>
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
