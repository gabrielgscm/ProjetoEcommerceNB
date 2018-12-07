<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Nadja Boutique | Categorias | Feminino</title>

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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <!-- Minha conta -->
          <li class="nav-item">
            <div class="dropdown">
              <a class="nav-link" href="index.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <a class="nav-link active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item active" href="categorias_feminino.php">Feminino</a>
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

    <div class="row">

      <div class="col-lg-3">

        <div class="my-4"></div>

        <!-- Roupas -->
        <div class="list-group">
          <a class="list-group-item list-group-item-dark" style="color: #fff;-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" unselectable="on">Roupas</a>
          <a href="#" class="list-group-item list-group-item-light">Camisetas & Blusas</a>
          <a href="#" class="list-group-item list-group-item-light">Camisas</a>
          <a href="#" class="list-group-item list-group-item-light">Casacos & Jaquetas</a>
          <a href="#" class="list-group-item list-group-item-light">Vestidos</a>
          <a href="#" class="list-group-item list-group-item-light">Shorts & Bermudas</a>
          <a href="#" class="list-group-item list-group-item-light">Saias</a>
          <a href="#" class="list-group-item list-group-item-light">Calças</a>
        </div>

        <div class="my-4"></div>

        <!-- Bolsas -->
        <div class="list-group">
          <a class="list-group-item list-group-item-dark" style="color: #fff;-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" unselectable="on">Bolsas</a>
          <a href="#" class="list-group-item list-group-item-light">Clutches</a>
          <a href="#" class="list-group-item list-group-item-light">Bolsas de Ombro</a>
          <a href="#" class="list-group-item list-group-item-light">Bolsas de mão</a>
          <a href="#" class="list-group-item list-group-item-light">Mochilas</a>
        </div>

        <div class="my-4"></div>

        <!-- Óculos -->
        <div class="list-group">
          <a class="list-group-item list-group-item-dark" style="color: #fff;-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" unselectable="on">Óculos</a>
          <a href="#" class="list-group-item list-group-item-light">Gatinho</a>
          <a href="#" class="list-group-item list-group-item-light">Aviador</a>
          <a href="#" class="list-group-item list-group-item-light">Quadrado</a>
          <a href="#" class="list-group-item list-group-item-light">Retangular</a>
          <a href="#" class="list-group-item list-group-item-light">Esportivo</a>
          <a href="#" class="list-group-item list-group-item-light">Clubmaster</a>
        </div>

      </div>

      <div class="col-lg-9">

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
        <div class="row">

          <!-- Produto 1 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a><img class="card-img-top" src="img/vestido_1.jpg" alt="Vestido FiveBlu Curto Liso Preto"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="products/vestido/produto_000001.php">FiveBlu</a>
                </h4>
                <h6><strike>R$89,90</strike> por</h6>
                <h5><strong>R$69,90</strong></h5>
                <p class="card-text">Vestido FiveBlu Curto Liso Preto</p>
              </div>
              <div class="card-footer">
                <small class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</small><small>&nbsp;(0)</small>
              </div>
            </div>
          </div>

          <!-- Produto 2 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a><img class="card-img-top" src="img/blusa_1.jpg" alt="Blusa Ciganinha H Heli Floral Branca/Verde"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="products/diversos/produto_000002.php">H Heli</a>
                </h4>
                <h6><strike>R$89,90</strike> por</h6>
                <h5><strong>R$59,90</strong></h5>
                <p class="card-text">Blusa Ciganinha H Heli Floral Branca/Verde</p>
              </div>
              <div class="card-footer">
                <small class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</small><small>&nbsp;(0)</small>
              </div>
            </div>
          </div>

          <!-- Produto 3 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a><img class="card-img-top" src="img/calca_1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="products/diversos/produto_000003.php">Colcci</a>
                </h4>
                <h6><strike>R$261,00</strike> por</h6>
                <h5><strong>R$209,90</strong></h5>
                <p class="card-text">Calça Jeans Colcci Skinny Cory Azul</p>
              </div>
              <div class="card-footer">
                <small class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</small><small>&nbsp;(0)</small>
              </div>
            </div>
          </div>

          <!-- Produto 4 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a><img class="card-img-top" src="img/bolsa_3.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Santa Lolla</a>
                </h4>
                <h6><strike>R$149,99</strike> por</h6>
                <h5><strong>R$119,99</strong></h5>
                <p class="card-text">Bolsa Transversal Santa Lolla Pequena Matelassê Preta</p>
              </div>
              <div class="card-footer">
                <small class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</small><small>&nbsp;(0)</small>
              </div>
            </div>
          </div>

          <!-- Produto 5 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a><img class="card-img-top" src="img/bolsa_2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Colcci</a>
                </h4>
                <h6><strike>R$259,99</strike> por</h6>
                <h5><strong>R$104,99</strong></h5>
                <p class="card-text">Mochila Colcci Logo Preta</p>
              </div>
              <div class="card-footer">
                <small class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</small><small>&nbsp;(0)</small>
              </div>
            </div>
          </div>

          <!-- Produto 6 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a><img class="card-img-top" src="img/oculos_1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Evoke</a>
                </h4>
                <h6><strike>R$597,00</strike> por</h6>
                <h5><strong>R$184,99</strong></h5>
                <p class="card-text">Óculos de Sol Evoke Hybrid I D01 Bege/Vermelho</p>
              </div>
              <div class="card-footer">
                <small class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</small><small>&nbsp;(0)</small>
              </div>
            </div>
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
    $('.carousel').carousel({
      interval: 3000
    })
  </script>

</body>

</html>