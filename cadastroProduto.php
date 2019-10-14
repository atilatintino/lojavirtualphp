<?php 

function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){

    $nomeArquivo = "produto.json";

    if(file_exists($nomeArquivo)){
        //abrindo e pegando informações do arquivo .JSON
        $arquivo = file_get_contents($nomeArquivo);
        //transformar JSON em ARRAY
        $produtos = json_decode($arquivo, true);
        //adicionando um novo produto na ARRAY que estava dentro do arquivo
        $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "desc"=>$descProduto, "imagem"=>$imgProduto];
        
        //salvando o JSON dentro de um arquivo
        $json = json_encode($produtos);
        //salvando o JSON dentro de um arquivo
        $deuCerto = file_put_contents($nomeArquivo, $json);
        if ($deuCerto){
        return "Dados salvos com sucesso!";
        }else{
            return "Algum problema ocorreu, tente novamente mais tarde";
        }        


    }else{
        $produtos = [];
        //array_push
        $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "desc"=>$descProduto, "imagem"=>$imgProduto];
        //transformando array em JSON
        $json = json_encode($produtos);
        //salvando o JSON dentro de um arquivo
        $deuCerto = file_put_contents($nomeArquivo, $json);
        if ($deuCerto){
        return "Dados salvos com sucesso!";
        }else{
            return "Algum problema ocorreu, tente novamente mais tarde";
        }
    }
}

if($_POST){

    //Salvando arquivo (Imagens)
    $nomeImg = $_FILES["imgProduto"]["name"];
    $localTmp = $_FILES["imgProduto"]["tmp_name"];
    $caminhoSalvo = "img/".$nomeImg;

    $deuCerto = move_uploaded_file($localTmp, $caminhoSalvo);
    

    echo cadastrarProduto($_POST["nomeProduto"], $_POST["descProduto"], $caminhoSalvo, $_POST["precoProduto"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Cadastro de Produto</h1>
                <form action="" method="post" enctype ="multipart/form-data">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nomeProduto" placeholder="Nome do Produto"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="descProduto" placeholder="Descrição do Produto"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="file" name="imgProduto" placeholder="Imagem do Produto"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" name="precoProduto" placeholder="Preço do Produto"/>
                    </div>
                    <button class="btn btn-success">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>