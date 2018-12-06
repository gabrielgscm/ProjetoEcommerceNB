<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/jquery_msg.css" rel="stylesheet">
<script type="text/javascript" src="js/cadastrojs.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>

$(document).ready(function(){  // Chama e executa a div quando o documento (página) estiver "PRONTO"
  $( "div.warning" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
});

// Definindo tempo para redirecionameno de página...
function DezSegundos(){
    location.href='../cadastrar.php';
}
setTimeout(DezSegundos, 1200*2);

</script>

</head>

<body>

<div class="alert-box warning">Porfavor preencha todos os campos com *</div>

</body>
</html>