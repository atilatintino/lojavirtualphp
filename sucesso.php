<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once("header.php");
include_once("config/validacoes.php");

$nomeUsuario = $_POST['nomeCompleto'];
$cpf = $_POST["cpf"];

validaNome($nomeUsuario);
validaCpf($cpf);

if (count($erros) == 0){
    echo "<h1> Olá $nomeUsuario, a sua compra foi realizado com sucesso! :)</h1>";

}else{
    foreach ($erros as $mensagemDeErro){
        echo "<h2>$mensagemDeErro</h2>";
    }
}


?>
</body>
</html>

    