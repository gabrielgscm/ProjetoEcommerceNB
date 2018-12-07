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
            <a class="navbar-brand" href="index.php" style="font-family: 'Poiret One', cursive; color: #e8c264" ;>Nadja Boutique</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <!-- Minha conta -->
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Minha conta
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item active" href="signin.php">Login</a>
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

    <div class="container">

        <div class="row" style="margin-top: 100px">

            <div class="col">

            </div>
            <div class="col">
                <form class="form-signin" method="post">
                    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                    <label for="inputUsuário" class="sr-only">Email</label>
                    <input type="email" name="emailCliente" id="inputUsuário" class="form-control" placeholder="Email" required autofocus>
                    <label for="inputSenha" class="sr-only">Senha</label>
                    <input type="password" name="senhaCliente" id="inputSenha" class="form-control" placeholder="Senha" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="lembrar" value="lembrar"> Lembrar-me
                        </label>
                    </div>
                    <a href="cadastrar.php">Não possui conta?</a>
                    <button class="btn btn-lg btn-dark btn-block" name="acao" value="logar" type="submit">Entrar</button>
                </form>

            </div>
            <div class="col">

            </div>

        </div>

    </div>

</body>

<!-- Bootstrap core JavaScript -->
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
$action = isset($_POST['acao']) ? trim($_POST['acao']) : '';
    if(isset($action) && $action != ""){ 
         
        switch($action){
            case 'logar':
                //requerindo a classe de autenticação passando os valores dos inputs como parâmetros
                require_once('class/Autentica.class.php');
                //instancio a classse para poder usar o método nela contida
                $Autentica = new Autentica();
                //setando 
                $Autentica->emailCliente = $_POST['emailCliente'];
                $Autentica->senhaCliente = $_POST['senhaCliente'];
                //chamando o método                     
                if($Autentica->Validar_Usuario()){
                   echo  "<script type='text/javascript'>
                            location.href='signed_index.php'
                        </script>";
                  }else{
                   echo  "<script type='text/javascript'>
                            alert('Login ou Senha invalidos...');
                            location.href='signin.php';
                        </script>";
                  }
            break;
        }   
    }
?>