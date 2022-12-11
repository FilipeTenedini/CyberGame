<?php require "admin/functions.php"


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/css/style_landing_page.css">
    <title>Cybergame - Página Promocional</title>
</head>
<body>
    <header class="cabecalho">
        <img class="cabecalho-imagem" src="assets/img/logo2.png"  alt="Logo CyberGames">
        <nav class="cabecalho-nav">
            <a class="cabelhaco-menu-item" href="home.php">Home</a>
            <a class="cabelhaco-menu-item" href="store.php">Loja</a> 
            <a class="cabelhaco-menu-item" href="login.php">Fazer Login</a>
            <a class="cabelhaco-menu-item" href="campeonato.html">Campeonato</a>
            <a class="cabelhaco-menu-item" href="promocao.html">Promoções</a>
        </nav>
    </header>
    <main class="conteudo"></main>
        
        <section class="conteudo-principal">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img id='imgCarousel' src="assets/img/basecamp.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img id='imgCarousel' src="assets/img/camp2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img id='imgCarousel' src="assets/img/amongus.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img id='imgCarousel' src="assets/img/fallg.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img id='imgCarousel' src="assets/img/genshin.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img id='imgCarousel' src="assets/img/grounded.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img id='imgCarousel' src="assets/img/rocket.jfif" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
            
        <section>    
            <form action="" method="post" class="formulario"> 
                <label>Nome completo:</label>
                <input type="text" name= "nome_contato" placeholder="Digite aqui o seu nome">
                <label>Seu melhor e-mail:</label>
                <input type="email" name="email_contato" placeholder="Digite aqui o seu e-mail">
                <button type="submit" value="Confirmar">Confirmar</button>
            </form>
            <h1><?php inserirContato($connect) ?></h1>
        </section>

                
    <footer class="rodape"></footer>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
