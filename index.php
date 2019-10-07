
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
    <?php include_once("header.php") ?> 
    <main>
        <section class="container mt-4">
            <div class="row justify-content-around">
            <?php if(isset($produtos) && $produtos != []){?>

                <?php foreach($produtos as $produto){ ?>
                    <div class="col-lg-3 card text-center">
                        <h2><?php echo $produto['nome']; ?></h2>
                        <img src="<?php echo $produto['img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $produto['preco']; ?></h5>
                            <a href="carrinho.php?nomeProduto=<?php echo $produto['nome']; ?>" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>

                    <!--Fechando php DO FOREACH -->
                <?php } ?>
                <!-- fechando o if em! -->
            <?php } else { ?> 
                    <h1>Não tem produtos cadastrados nessa sessão :( </h1>
            <?php } ?>
            </div>
        </section>
    </main>
   
</body>

</html>