<?php require "functions.php"

$dbHost = "localhost";
$dbUser = "root";
$dbPass= "";
$dbName = "contatos_cyber_games"

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
        <img src="assets/img/1.jpg" alt="Imagem do Pac-man">
        <section class="conteudo-principal">
            <label>Nome completo:</label>
            <input type="text" name= "nome" placeholder="Digite aqui o seu nome">
            <label>Seu melhor e-mail:</label>
            <input type="text" name="email" placeholder="Digite aqui o seu e-mail">

        </section>
        <section class="conteudo-secundario">
            
        </section>
        
    <footer class="rodape"></footer>
    
</body>
</html>