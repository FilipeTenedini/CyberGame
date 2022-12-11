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
            <h1><?php inserirContato($connect) ?></h1>
        
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    
                    <div id="carousel1" class="carousel-item active">
                        <img id="imgCarossel" class="d-block w-100" src="assets/img/basecamp.jpg" alt="Primeiro Slide">
                    </div>
                    
                    <div class="carousel-item">
                        <img id="imgCarossel" class="d-block w-100" src="assets/img/camp2.jpg" alt="Segundo Slide">
                    </div>
                    
                    <div class="carousel-item">
                        <img id="imgCarossel" class="d-block w-100" src="assets/img/gt7.jpg" alt="Terceiro Slide">
                    </div>
                    
                    <div class="carousel-item">
                        <img id="imgCarossel" class="d-block w-100" src="assets/img/amongus.jpg" alt="Quarto Slide">
                    </div>
                    
                    <div class="carousel-item">
                        <img id="imgCarossel" class="d-block w-100" src="assets/img/fallg.jpg" alt="Quinto Slide">
                    </div>

                    <div class="carousel-item">
                        <img id="imgCarossel" class="d-block w-100" src="assets/img/genshin.jpg" alt="Sexto Slide">
                    </div>

                    <div class="carousel-item">
                        <img id="imgCarossel" class="d-block w-100" src="assets/img/grounded.jpg" alt="Sétimo Slide">
                    </div>

                    <div class="carousel-item">
                        <img id="imgCarossel" class="d-block w-100" src="assets/img/returnal.jpg" alt="Oitavo Slide">
                    </div>

                    <div class="carousel-item">
                        <img id="imgCarossel" class="d-block w-100" src="assets/img/rocket.jfif" alt="Nono Slide">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
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

        </section>

                
    <footer class="rodape"></footer>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>