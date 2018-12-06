<?php
 
require_once 'init.php';

// pega os dados do formuário
$id_users = isset($POST['id_users']) ? $_POST['id_users'] : null;
$nomeCliente = isset($_POST['nomeCliente']) ? $_POST['nomeCliente'] : null;
//$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
$senhaCliente = isset($_POST['senhaCliente']) ? $_POST['senhaCliente'] : null;
$senhaCliente_confirm = isset($_POST['senhaCliente_confirm']) ? $_POST['senhaCliente_confirm'] : null;
$cpfCliente = isset($_POST['cpfCliente']) ? $_POST['cpfCliente'] : null;
$nascimentoCliente = isset($_POST['nascimentoCliente']) ? $_POST['nascimentoCliente'] : null;
$sexoCliente = isset($_POST['sexoCliente']) ? $_POST['sexoCliente'] : null;
$telefoneCliente = isset($_POST['telefoneCliente']) ? $_POST['telefoneCliente'] : null;
//$telefone2 = isset($_POST['telefone2']) ? $_POST['telefone2'] : null;
$emailCliente = isset($_POST['emailCliente']) ? $_POST['emailCliente'] : null;
$cepEndereco = isset($_POST['cepEndereco']) ? $_POST['cepEndereco'] : null;
$logradouroEndereco = isset($_POST['logradouroEndereco']) ? $_POST['logradouroEndereco'] : null;
$numeroEndereco = isset($_POST['numeroEndereco']) ? $_POST['numeroEndereco'] : null;
$bairroEndereco = isset($_POST['bairroEndereco']) ? $_POST['bairroEndereco'] : null;
$cidadeEndereco = isset($_POST['cidadeEndereco']) ? $_POST['cidadeEndereco'] : null;
$estadoEndereco = isset($_POST['estadoEndereco']) ? $_POST['estadoEndereco'] : null;

// Confirma se as senhas estão iguais
if ($senhaCliente != $senhaCliente_confirm)
{
    echo "<script type='text/javascript'>
               location.href='msg_warning_confirm.php';
          </script>";
    exit;
}

// Confirma se o tamanho da senha é igual ou maior que 6 caracteres
if (strlen($senhaCliente_confirm) < 6)
{
    echo "<script type='text/javascript'>
               location.href='msg_warning_confirm_strlen.php';
          </script>";
    exit;
}
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($nomeCliente) || empty($senhaCliente) || empty($senhaCliente_confirm) || empty($cpfCliente) || empty($nascimentoCliente) ||
    empty($sexoCliente) || empty($telefoneCliente) || empty($emailCliente) || empty($cepEndereco) || empty($logradouroEndereco) ||
    empty($numeroEndereco) || empty($bairroEndereco) || empty($cidadeEndereco) || empty($estadoEndereco))
{
    echo "<script type='text/javascript'>
               location.href='msg_warning.php';
          </script>";
    exit;
}

//Converter data para yyyy/mm/dd
$isoDate = dateConvert($nascimentoCliente);

// insere no banco
$PDO = db_connect();

$sql = "INSERT INTO cliente(pk_idCliente, nomeCliente, senhaCliente, cpfCliente, nascimentoCliente, sexoCliente, telefoneCliente, emailCliente)
 VALUES(:pk_idCliente, :nomeCliente, :senhaCliente, :cpfCliente, :nascimentoCliente, :sexoCliente, :telefoneCliente, :emailCliente)";

//prepare statement ("Requisito não funcional")
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':pk_idCliente', $pk_idCliente, PDO::PARAM_INT);
$stmt->bindParam(':nomeCliente', $nomeCliente);
//$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':senhaCliente', $senhaCliente);
$stmt->bindParam(':cpfCliente', $cpfCliente);
$stmt->bindParam(':nascimentoCliente', $nascimentoCliente);
$stmt->bindParam(':sexoCliente', $sexoCliente);
$stmt->bindParam(':telefoneCliente', $telefoneCliente);
//$stmt->bindParam(':telefone2', $telefone2);
$stmt->bindParam(':emailCliente', $emailCliente);

$stmt->execute();

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
$stmt->bindParam(':estadoEndereco', $estadoEndereco);

// Desconecta
$PDO = null;

if ($stmt->execute())
{
    echo "<script type='text/javascript'>
                location.href='msg_success.php';
          </script>";
}
else
{   //Tratar o error caso algo inexperado ocorra
    echo "<script type='text/javascript'>
                location.href='msg_failure.php';
          </script>";
    //print_r($stmt->errorInfo());
}

?>