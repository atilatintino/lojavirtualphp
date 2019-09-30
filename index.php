<?php
    $nomeSistema = "Cursos Ai!";
    $usuario = ["nome"=>"Atila"];
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
            <section class="container mt-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 card text-center">
                    <h5 class="card-title">Título do card</h5>
                    <img class="card-img-top" src="img/img-1.svg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <p class="card-text">R$15,00</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            
            
                <div class="col-lg-3 card text-center">
                    <h5 class="card-title">Título do card</h5>
                    <img class="card-img-top" src="img/img-1.svg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <p class="card-text">R$15,00</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            
            
                <div class="col-lg-3 card text-center">
                    <h5 class="card-title">Título do card</h5>
                    <img class="card-img-top" src="img/img-1.svg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <p class="card-text">R$15,00</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
            </section>
        </main>
</body>
</html>