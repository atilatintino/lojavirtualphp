<?php include_once("variaveis.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<header>
        <div class="navbar">
            <h1 id="logo">
                <?php echo $nomeSistema; ?>
            </h1>
            <nav>
                <ul class="nav">
                    <?php if(isset($usuario) && $usuario != []) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Curso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá <?php echo $usuario['nome']; ?></a>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastro</a>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
       <!--categorias -->
       <nav class="navbar bg-dark ">
            <ul class="nav">
                <?php foreach($categorias as $categoria) { ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><?php echo $categoria; ?></a>
                    </li>
                <?php } ?>
            </ul>   
        </nav>
    </header>