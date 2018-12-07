<?php
//require_once "../../functions/product.php";
require '../../formularios/init.php';

// abre a conexão
$PDO = db_connect();
 
// SQL para contar o total de registros
//$sql_count = "SELECT COUNT(*) AS total FROM chamados ORDER BY nome ASC";
 
// SQL para selecionar os registros
$sql = "SELECT * FROM produto where pk_idProduto = 1 ORDER BY nomeProduto ASC;";
 
// conta o total de registros
//$stmt_count = $PDO->prepare($sql_count);
//$stmt_count->execute();
//$total = $stmt_count->fetchColumn();
 
// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Nadja Boutique | Home</title>

  <!-- Bootstrap core CSS -->
  <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos customizados para esse template -->
  <link href="../../css/templateh.css" rel="stylesheet">

  <!-- Pure CSS Social Media Icons -->
  <link href="../../css/socialmedia.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

</head>

<body>

  <!-- Menu de navegação -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../../index.php" style="font-family: 'Poiret One', cursive; color: #e8c264" ;>Nadja
        Boutique</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <!-- Minha conta -->
          <li class="nav-item">
            <div class="dropdown">
              <a class="nav-link" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Minha conta
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="../../signin.php">Login</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/cadastrar.php">Cadastre-se</a>
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

        <!-- Vestidos -->
        <div class="list-group">
          <a class="list-group-item list-group-item-dark" style="color: #fff;-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" unselectable="on">Vestidos</a>
          <a href="#" class="list-group-item list-group-item-light">Vestido Midi</a>
          <a href="#" class="list-group-item list-group-item-light active">Vestido Curto</a>
          <a href="#" class="list-group-item list-group-item-light">Vestido Longo</a>
          <a href="#" class="list-group-item list-group-item-light">Vestido Liso</a>
          <a href="#" class="list-group-item list-group-item-light">Vestido Estampado</a>
          <a href="#" class="list-group-item list-group-item-light">Vestido de Renda</a>
        </div>

        <div class="my-4"></div>

        <!-- Marcas -->
        <div class="list-group">
          <a class="list-group-item list-group-item-dark" style="color: #fff;-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" unselectable="on">Marcas</a>
          <a href="#" class="list-group-item list-group-item-light">Abalot</a>
          <a href="#" class="list-group-item list-group-item-light">Calvin Klein</a>
          <a href="#" class="list-group-item list-group-item-light">Classic</a>
          <a href="#" class="list-group-item list-group-item-light">Colcci</a>
          <a href="#" class="list-group-item list-group-item-light">Colmeia</a>
          <a href="#" class="list-group-item list-group-item-light active">FiveBlue</a>
          <a href="#" class="list-group-item list-group-item-light">Fiya Lady</a>
          <a href="#" class="list-group-item list-group-item-light">Forum</a>
          <a href="#" class="list-group-item list-group-item-light">Lança Perfume</a>
          <a href="#" class="list-group-item list-group-item-light">Pink Tricot</a>
        </div>

      </div>

      <!-- Cards -->

      <div class="col-lg-9">

        <!-- Produto -->
        <div class="card mt-4">
          <img class="card-img-top img-fluid rounded mx-auto d-block" src="../../img/vestido_1.jpg" alt="Vestido FiveBlu Curto Liso Preto" style="max-width: 40%;height: auto;">
          <div class="card-body">
            <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <h3 class="card-title" style="color: #e8c264">
              <?php echo $user['nomeProduto']?>
            </h3>
            <h5><strike>R$89,90</strike> por</h5>
            <h4><strong>R$
                <?php echo number_format($user['precoUnitarioProduto'], 2, ',', '.') ?></strong></h4>
            <hr>
            <div class="row">
              <div class="col">
                <p class="card-text">Detalhes do produto: <br> <br>
                  Manga: Curta <br>
                  Comprimento: Curto <br>
                  Decote: Trapézio <br>
                  Tipo de Tecido: Malha <br>
                  Cor: Preto <br>
                  Material: Poliéster <br>
                  Modelo: FiveBlu 181139</p>
                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                5.0 estrelas
              </div>
              <div class="col">
                <a type="button" href="../../item_pedido/carrinho.php?acao=<?php echo $user['pk_idProduto']?>" class="btn btn-success btn-lg">Comprar</a>
                <button type="button" class="btn btn-danger btn-lg">Adicionar aos Favoritos</button>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Avaliações do produto
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique
              necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia,
              necessitatibus quae sint natus.</p>
            <small class="text-muted">Postado por Anônimo em 22/11/18</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique
              necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia,
              necessitatibus quae sint natus.</p>
            <small class="text-muted">Postado por Anônimo em 22/11/18</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique
              necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia,
              necessitatibus quae sint natus.</p>
            <small class="text-muted">Postado por Anônimo em 22/11/18</small>
            <hr>
            <a href="#" class="btn btn-secondary">Comentar</a>
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
          <img src="../../img/visa_1.png" alt="Visa" width="15%">
          <img src="../../img/master_1.png" alt="Mastercard" width="15%">
          <img src="../../img/elo_1.png" alt="Elo" width="15%">
          <img src="../../img/americanexpress_1.png" alt="American Express" width="15%">
          <img src="../../img/boleto_1.png" alt="Boleto" width="15%">
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
  <script src="../../jquery/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>