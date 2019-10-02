<?php
    $nomeSistema = "Cursos Ai!";
    $usuario = ["nome"=>"Atila"];

    $produtos = [
        ["nome"=>"Curso Fullstack", "preco"=>1200.00, "duracao"=>"5 meses"],
        ["nome"=>"Curso Marketing", "preco"=>1000.00, "duracao"=>"4 meses"],
        ["nome"=>"Curso Produtos Digitais", "preco"=>1300.00, "duracao"=>"4 meses"],
        ["nome"=>"Curso C#", "preco"=>1100.00, "duracao"=>"5 meses"],
        ["nome"=>"Curso História", "preco"=>1400.00, "duracao"=>"6 meses"],
        ["nome"=>"Curso Matemática", "preco"=>1600.00, "duracao"=>"4 meses"],
        ["nome"=>"Curso Ciências", "preco"=>1700.00, "duracao"=>"3 meses"],
        ["nome"=>"Curso Ciências", "preco"=>1700.00, "duracao"=>"3 meses"],
    ];

    $categorias = ["Cursos", "Palestras", "Artigos", "Cursos", "Palestras", "Artigos", "Cursos", "Palestras", "Artigos"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="container">
        <header class="navbar">
            <div id="logo">
                <h1>
                    <?php 
                        echo $nomeSistema;
                    ?>
                </h1>
            </div>
            <nav>
                <ul class="nav">
                    <?php if(isset($usuario) && $usuario != []) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $usuario['nome']; ?></a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cursos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                        </li>
                    <?php } ?>
                </ul>
        </header>
        <main>
            <div class="navbar d-flex justify-content-between">
                <?php foreach($categorias as $categoria){?>
                    <ul class="nav">
                        <li class="nav-item"><?php echo $categoria; ?></li>
                    </ul>
                <?php } ?>    
            </div>            
            <section class="container mt-4">
            <div class="row justify-content-between align-items-center">

            <?php if (isset($produtos) && $produtos != []) { ?>
                <?php foreach($produtos as $produto){ ?>

                    <div class="col-lg-3 card text-center">
                        <h5 class="card-title"><?php echo $produto['nome']; ?></h5>
                        <img class="card-img-top" src="img/img-1.svg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <p class="card-text"><?php echo $produto['preco'] ?></p>
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                    </div>

                <?php } ?>
            <?php } else { ?>
                <h1>Não tem produtos cadastrados nessa sessão.</h1>
            <?php } ?>
                
            </div>
            </section>
        </main>
</body>
</html>