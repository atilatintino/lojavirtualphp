<?php 

//criando array de erros
$erros = [];

//criando funções de validação
function validaNome($nome){
    if (strlen($nome) == 0){
        global $erros;
        array_push($erros, "Necessário o preenchimento do campo nome");
    }
}

function validaCpf($cpf){
    if (strlen($cpf) != 11){
        global $erros;
        array_push($erros, "Cpf incorreto");
    }
}

/* $teste = "";
validaNome($teste)."<br>";
validaCpf($teste)."<br>";
var_dump($erros); */
?>