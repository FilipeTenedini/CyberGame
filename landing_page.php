<?php require "admin/functions.php"


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin/css/style_landing_page.css">
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
        
        
            <div class="slideshow-container">


                <div class="mySlides">
                <div class="numbertext">1 / 11</div>
                <img src="assets/img/basecamp.jpg" style="width:45%" alt="Capa do jogo GTA V">
                <div class="text">GTA V</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">2 / 11</div>
                <img src="assets/img/camp2.jpg" style="width:45%" alt="Capa do jogo Red Dead Redemption">
                <div class="text">RED DEAD REDEMPTION</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">3 / 11</div>
                <img src="assets/img/gt7.jpg" style="width:45%" alt="Capa do jogo Gran Turismo 7">
                <div class="text">GRAN TURISMO 7</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">4 / 11</div>
                <img src="assets/img/returnal.jpg" style="width:45%" alt="Capa do jogo Returnal">
                <div class="text">RETURNAL</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">5 / 11</div>
                <img src="assets/img/genshin.jpg" style="width:45%" alt="Capa do jogo Genshin Impact">
                <div class="text">GENSHIN IMPACT</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">6 / 11</div>
                <img src="assets/img/fortnite.jfif" style="width:45%" alt="Capa do jogo Fortnite">
                <div class="text">FORTNITE</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">7 / 11</div>
                <img src="assets/img/rocket.jfif" style="width:45%" alt="Capa do jogo Rocket League">
                <div class="text">ROCKET LEAGUE</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">8 / 11</div>
                <img src="assets/img/farcry.jpg" style="width:45%" alt="Capa do jogo Far Cry">
                <div class="text">FAR CRY</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">9 / 11</div>
                <img src="assets/img/amongus.jpg" style="width:45%" alt="Capa do jogo Among Us">
                <div class="text">AMONG US</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">10 / 11</div>
                <img src="assets/img/fallg.jpg" style="width:45%" alt="Capa do jogo Fall Guys">
                <div class="text">FALL GUYS</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">11 / 11</div>
                <img src="assets/img/grounded.jpg" style="width:45%" alt="Capa do jogo Grounded">
                <div class="text">GROUNDED</div>
            

                <div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            
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
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }
    </script>

</body>
</html>