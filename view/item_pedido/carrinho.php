<?php 
    //starta a sessão
    //session_start();
    //ob_start();
    //resgata os valores das session em variaveis
    $pk_idCliente = isset($_SESSION['pk_idCliente']) ? $_SESSION['pk_idCliente']: "";   
    $emailCliente = isset($_SESSION['emailCliente']) ? $_SESSION['emailCliente']: "";
    $nomeCliente = isset($_SESSION['nomeCliente']) ? $_SESSION['nomeCliente']: "";  
    $senhaCliente = isset($_SESSION['senhaCliente']) ? $_SESSION['senhaCliente']: "";
    //$restricao_users = isset($_SESSION['restricao']) ? $_SESSION['restricao']: ""; 
    $logado = isset($_SESSION['logado']) ? $_SESSION['logado']: "N";

    //varifica se a var logado contém o valos (S) OU (N), se conter N quer dizer que a pessoa não fez o login corretamente
    //que no caso satisfará a condição no if e a pessoa sera redirecionada para a tela de login novamente
    if ($logado == "N" && $pk_idCliente == ""){     
        echo  "<script type='text/javascript'>
                alert('É preciso estar logado para adicionar itens no carrinho');
                location.href='../signin.php';
                </script>";  
        exit();
    }
    
?>

<?php 

if(isset($_SESSION['venda'])){
   
}else{
    $_SESSION['venda'] = array();
}

if(isset($_GET['acao'])){
    $Produto = $_GET['acao'];
    $_SESSION['venda'][$Produto] = 1;
}

if(isset($_GET['del'])){
    $Del = $_GET['del'];
    unset($_SESSION['venda'][$Del]);
}

//print_r($_SESSION['venda']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Nadja Boutique | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="../css/templateh.css" rel="stylesheet">

    <!-- Pure CSS Social Media Icons -->
    <link href="../css/socialmedia.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<?php require_once "../formularios/init.php"; // Conexão ?>

<body>

    <!-- Menu de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../signed_index.php" style="font-family: 'Poiret One', cursive; color: #e8c264" ;>Nadja
                Boutique</a>
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
                                <a class="dropdown-item" href="#">Configurações</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Favoritos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Carrinho</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Ajuda</a>
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
                                <a class="dropdown-item" href="../categorias_feminino.php">Feminino</a>
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

                    <!-- Meus Favoritos -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="material-icons">favorite_border</i></a>
                    </li>

                    <!-- Meu Carrinho -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="material-icons">shopping_cart</i></a>
                    </li>

                </ul>
            </div>

        </div>

    </nav>

    <br> <br>
    <center>
        <h2>Carrinho</h2>
    </center>
    <br>
    <br>

    <center>
        <table class="table">
            <tr>
                <td class="table-active"><strong>Nome</strong></td>
                <td class="table-active"><strong>Valor</strong></td>
                <td class="table-active"><strong>Quantidade</strong></td>
                <td class="table-active"><strong>Ação</strong></td>
            </tr>

            <?php 
        $Total = 0;
        foreach ($_SESSION['venda'] as $prod => $quantidade):
            
            $PDO = db_connect();
            $sql = "select * from produto where pk_idProduto = '$prod' ";
            $stmt = $PDO->prepare($sql);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            echo '<tr>';
            echo '<td>'.$user['nomeProduto'].'</td>';
            echo '<td>R$: '.$user['precoUnitarioProduto'].'</td>';
            echo '<td>'.$quantidade.'</td>';
            echo '<td><a href="carrinho.php?del='.$user['pk_idProduto'].'"</a><i class="material-icons">
delete
</i></td>'; // Retira item do carrinho...
            $Total += $user['precoUnitarioProduto'] * $quantidade;
            echo '</tr>';
        
        endforeach;

            echo '<tr>';
            echo '<td colspan="4" align="right">R$: '.number_format($Total,2,",","." ).'</td>';
            echo '</tr>';
      
        ?>

            <?php 
            if(isset($_POST['enviar'])){
                $fk_cliente = $_SESSION['pk_idCliente'];
                $PDO = db_connect();
                $sql = "insert into pedido (pk_idPedido,fk_cliente,precoTotal) values (':pk_idPedido','$fk_cliente','$Total')";
                $stmt = $PDO->prepare($sql);
                $stmt->bindParam(':pk_idPedido', $pk_idPedido);
                $stmt->bindParam(':fk_cliente', $fk_cliente);
                $stmt->bindParam(':precoTotal', $Total);
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                
                $pk_idPedido = $PDO->lastInsertId();
                $fk_pedido = $pk_idPedido;

                foreach ($_SESSION['venda'] as $ProdInsert => $quantidade):
                    $sql2 = "insert into item_pedido (fk_pedido,fk_produto,quantidadeItemPedido) values ('$fk_pedido','$ProdInsert','$quantidade')";
                    $stmt = $PDO->prepare($sql2);
                    $stmt->bindParam('fk_pedido', $fk_pedido);
                    $stmt->bindParam('fk_produto', $ProdInsert);
                    $stmt->bindParam('quantidadeItemPedido', $quantidade);
                    $stmt->execute();
               
                endforeach;
                
                    unset($_SESSION['venda']);
                    //print_r($stmt->errorInfo());
                    echo "<script>
                        alert('Pedido finalizado!');
                        location.href='../signed_index.php';
                    </script>";
                    exit;
                
            }
        
        ?>

        </table>
    </center>

    <center>
        <form action="" enctype="multipart/form-data" method="post">
            <input type="submit" name="enviar" value="Finalizar Pedido" />
        </form>
    </center>

    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>