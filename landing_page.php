<?php require "admin/functions.php"


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_landing_page.css">
    <title>Cybergame - Página Promocional</title>
</head>
<body>
    <header class="cabecalho">
        <img class="cabecalho-imagem" src="assets/img/logo.jpg" alt="Logo CyberGames">
        <nav class="cabecalho-nav">
            <a class="cabelhaco-menu-item" href="home.php">Home</a>
            <a class="cabelhaco-menu-item" href="cardapio.php">Cardápio</a> 
            <a class="cabelhaco-menu-item" href="login.php">Fazer Login</a>
            <a class="cabelhaco-menu-item" href="#">Contato</a>
            <a class="cabelhaco-menu-item" href="#">Trabalhe Conosco</a>
        </nav>
    </header>
    <main class="conteudo"></main>
        
        <section class="conteudo-principal">
            <h1><?php inserirContato($connect) ?></h1>
        <div class="slideshow-container">


            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img1.jpg" style="width:100%">
            <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img2.jpg" style="width:100%">
            <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img3.jpg" style="width:100%">
            <div class="text">Caption Three</div>
            </div>


            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>


            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            
            <form action="" method="post"> 
                <label>Nome completo:</label>
                <input type="text" name= "nome_contato" placeholder="Digite aqui o seu nome">
                <label>Seu melhor e-mail:</label>
                <input type="email" name="email_contato" placeholder="Digite aqui o seu e-mail">
                <input type="submit" value="Confirmar">
            </form>

        </section>
        <section class="conteudo-secundario">
            
        </section>
        
    <footer class="rodape"></footer>
    
</body>
</html>