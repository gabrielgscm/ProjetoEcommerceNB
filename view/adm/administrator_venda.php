<?php
    //starta a sessão
    //session_start();
    //ob_start();
    //resgata os valores das session em variaveis
    $pk_idAdministrador = isset($_SESSION['pk_idAdministrador']) ? $_SESSION['pk_idAdministrador']: "";   
    $emailAdministrador = isset($_SESSION['emailAdministrador']) ? $_SESSION['emailAdministrador']: "";
    $nomeAdministrador = isset($_SESSION['nomeAdministrador']) ? $_SESSION['nomeAdministrador']: "";  
    $senhaAdministrador = isset($_SESSION['senhaAdministrador']) ? $_SESSION['senhaAdministrador']: "";
    //$restricao_users = isset($_SESSION['restricao']) ? $_SESSION['restricao']: ""; 
    $logado = isset($_SESSION['logado']) ? $_SESSION['logado']: "N";

    //varifica se a var logado contém o valos (S) OU (N), se conter N quer dizer que a pessoa não fez o login corretamente
    //que no caso satisfará a condição no if e a pessoa sera redirecionada para a tela de login novamente
    if ($logado == "N" && $pk_idCliente == ""){     
        echo  "<script type='text/javascript'>
                alert('login errado');
                location.href='../signinAdm.php'
                </script>";  
                //location.href='index.php' 
                // && $pk_idCliente == ""
        exit();
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Nadja Boutique | Administrativo</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="../css/templateh.css" rel="stylesheet">

    <!-- Pure CSS Social Media Icons -->
    <link href="../css/socialmedia.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

</head>

<body>
    <!-- Menu de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="administrator_produto.php">Administrativo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <!-- Usuário -->
                    <li class="nav-item">
                        <a class="nav-link" href="administrator_usuario.php">Usuários</a>
                    </li>

                    <!-- Produtos -->
                    <li class="nav-item">
                        <a class="nav-link" href="administrator_produto.php">Produtos</a>
                    </li>

                    <!-- Vendas -->
                    <li class="nav-item">
                        <a class="nav-link" href="administrator_venda.php">Vendas</a>
                    </li>

                </ul>
            </div>

        </div>

    </nav>

    <div class="container theme-showcase" role="main">
        <br> <br>
        <h2>Vendas</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome do Cliente</th>
                            <th>Data do Pedido</th>
                            <th>Preço Total</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Joao Pedro</td>
                            <td>06/12/2018</td>
                            <td>R$300.00</td>
                            <td>
                                <button type="button" class="btn btn-xs btn-warning">Editar</button>
                                <button type="button" class="btn btn-xs btn-danger">Apagar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<!-- Bootstrap core JavaScript -->
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $('.carousel').carousel({
        interval: 3000
    })
</script>