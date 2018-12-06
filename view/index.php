<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Nadja Boutique | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/templateh.css" rel="stylesheet">

    <!-- Pure CSS Social Media Icons -->
    <link href="css/socialmedia.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

  </head>

  <body>

    <!-- Menu de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="font-family: 'Poiret One', cursive; color: #e8c264" ;>Nadja
          Boutique</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <!-- Minha conta -->
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  Minha conta
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="signin.php">Login</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="cadastrar.php">Cadastre-se</a>
                </div>
              </div>
            </li>

            <!-- Categorias -->
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="categorias_feminino.php">Feminino</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Masculino</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Infantil</a>
                </div>
              </div>
            </li>

            <!-- Contato -->
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>

          </ul>
        </div>

      </div>

    </nav>

    <!-- Corpo da página -->
    <div class="container">

      <!-- Carousel -->
      <div id="carouselExample" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample" data-slide-to="1"></li>
          <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="img/banner_1.gif" alt="Primeiro slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="http://placehold.it/1170x350" alt="Segundo slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="http://placehold.it/1170x350" alt="Terceiro slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>

      <!-- Cards -->
      <div class="row text-center">

        <!-- Bolsas femininas -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="img/bolsa_1.jpg" alt="Bolsas Femininas">
            <div class="card-body">
              <h4 class="card-title">BOLSAS FEMININAS</h4>
              <p class="card-text">Aproveite a <strong>Promoção Black Friday</strong>!<br>
                Itens com até <strong>50%</strong> de desconto!</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-warning">Saiba mais!</a>
            </div>
          </div>
        </div>

        <!-- Roupas femininas -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="img/roupa_1.jpg" alt="Roupas femininas">
            <div class="card-body">
              <h4 class="card-title">ROUPAS FEMININAS</h4>
              <p class="card-text">Aproveite a <strong>Promoção Black Friday</strong>!<br>
                Itens com até <strong>50%</strong> de desconto!</p>
            </div>
            <div class="card-footer">
              <a href="categorias_feminino.php" class="btn btn-warning">Saiba mais!</a>
            </div>
          </div>
        </div>

        <!-- Roupas masculinas -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="img/roupa_2.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">ROUPAS MASCULINAS</h4>
              <p class="card-text">Aproveite a <strong>Promoção Black Friday</strong>!<br>
                Itens com até <strong>50%</strong> de desconto!</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-warning">Saiba mais!</a>
            </div>
          </div>
        </div>

        <!-- Bolsas masculinas -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="img/bolsa_2.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">BOLSAS MASCULINAS</h4>
              <p class="card-text">Aproveite a <strong>Promoção Black Friday</strong>!<br>
                Itens com até <strong>50%</strong> de desconto!</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-warning">Saiba mais!</a>
            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <div class="row">

          <!-- Sobre -->
          <div class="col">
            <p class="m-0 text-left text-white">Sobre</p>
            <hr style="border-color: #fff">
            <a href="#" class="m-0 text-left text-white">Sobre a Nadja Boutique</a> <br>
            <a href="#" class="m-0 text-left text-white">Política de segurança e privacidade</a>
          </div>

          <!-- Informações úteis -->
          <div class="col">
            <p class="m-0 text-left text-white">Informações úteis</p>
            <hr style="border-color: #fff">
            <a href="#" class="m-0 text-left text-white">Prazo de entrega</a> <br>
            <a href="#" class="m-0 text-left text-white">Trocas e devoluções</a> <br>
            <a href="#" class="m-0 text-left text-white">Termos e condições</a> <br>
          </div>

          <!-- Formas de pagamento -->
          <div class="col">
            <p class="m-0 text-left text-white">Formas de pagamento</p>
            <hr style="border-color: #fff">
            <img src="img/visa_1.png" alt="Visa" width="15%">
            <img src="img/master_1.png" alt="Mastercard" width="15%">
            <img src="img/elo_1.png" alt="Elo" width="15%">
            <img src="img/americanexpress_1.png" alt="American Express" width="15%">
            <img src="img/boleto_1.png" alt="Boleto" width="15%">
          </div>

          <!-- Conecte-se -->
          <div class="col">
            <p class="m-0 text-left text-white">Conecte-se</p>
            <hr style="border-color: #fff">
            <a href="#" class="social-icon"> <i class="fa fa-facebook"></i></a>
            <a href="#" class="social-icon"> <i class="fa fa-instagram"></i></a>
            <a href="#" class="social-icon"> <i class="fa fa-twitter"></i></a>
            <a href="#" class="social-icon"> <i class="fa fa-google-plus"></i></a>
          </div>
        </div>

        <div class="row">
          <div class="col">

          </div>
          <div class="col">

          </div>
          <div class="col">

          </div>

          <!-- Copyright -->
          <div class="col">
            <p class="m-0 text-left text-white" style="font-family: 'Poiret One', cursive">Copyright &copy; Nadja
              Boutique</p>
          </div>

        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      $('.carousel').carousel(
        {
          interval: 3000
        })
    </script>

  </body>

</html>
