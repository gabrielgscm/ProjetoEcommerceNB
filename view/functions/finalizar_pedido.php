<?php
session_start();
require_once "product.php";
require_once "cart.php";
$pdoConnection = require_once "../connection.php";
$resultsCarts = getContentCart($pdoConnection);

    echo '<pre>';
    echo var_dump ($resultsCarts); 
    echo '</pre>';

// pega os dados do formuário
/*$id_produto = isset($_POST['pk_idProduto']) ? $_POST['pk_idProduto'] : null;
$id_cliente = isset($_POST['nomeCliente']) ? $_POST['nomeCliente'] : null;
$dataPedido = isset($_POST['dataPedido']) ? $_POST['dataPedido'] : null;
$precoTotal = isset($_POST['precoTotal']) ? $_POST['precoTotal'] : null;

//Converter data para yyyy/mm/dd
//$isoDate = dateConvert($nascimentoCliente);

//insert into item_pedido (fk_pedido,fk_produto,precoUnitarioItemPedido,quantidadeItemPedido,precoTotalItemPedido) values (1,1,80.65,1,80.65);
//insert into pedido (fk_cliente,dataPedido,precoTotal) values (1,'2018/12/03',500);

// insere no banco
$PDO = db_connect();

$sql = "INSERT INTO pedido(fk_cliente, dataPedido, precoTotal)
 VALUES(1,'2018/12/03', :precoTotal)";

//prepare statement ("Requisito não funcional")
$stmt = $PDO->prepare($sql);
//$stmt->bindParam(':fk_cliente', $fk_cliente);
//$stmt->bindParam(':dataPedido', $dataPedido);
$stmt->bindParam(':precoTotal', $precoTotal);

/*$stmt->execute();

//Função para pega a id da ultima inserção referente a tabela cliente
$pk_idCliente = $PDO->lastInsertId();
$fk_cliente = $pk_idCliente;

$sql2 = "INSERT INTO endereco(fk_cliente, cepEndereco, logradouroEndereco, numeroEndereco, bairroEndereco, cidadeEndereco, estadoEndereco)
VALUES(:fk_cliente, :cepEndereco, :logradouroEndereco, :numeroEndereco, :bairroEndereco, :cidadeEndereco, :estadoEndereco)";

//prepare statement ("Requisito não funcional")
$stmt = $PDO->prepare($sql2);
$stmt->bindParam(':fk_cliente', $fk_cliente);
$stmt->bindParam(':cepEndereco', $cepEndereco);
$stmt->bindParam(':logradouroEndereco', $logradouroEndereco);
$stmt->bindParam(':numeroEndereco', $numeroEndereco);
$stmt->bindParam(':bairroEndereco', $bairroEndereco);
$stmt->bindParam(':cidadeEndereco', $cidadeEndereco);
$stmt->bindParam(':estadoEndereco', $estadoEndereco);*/

// Desconecta
/*$PDO = null;

if ($stmt->execute())
{
    echo "<script type='text/javascript'>
                location.href='../formularios/msg_success.php';
          </script>";
}
else
{   //Tratar o error caso algo inexperado ocorra
    echo "<script type='text/javascript'>
                //location.href='../formularios/msg_failure.php';
          </script>";
    //print_r($stmt->errorInfo());
}*/

?>