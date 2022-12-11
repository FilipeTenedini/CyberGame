<?php
require_once 'admin/functions.php';
$estilo = buscaEstilo($connect);

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles_<?php echo $estilo; ?>.css">
    <script src="https://kit.fontawesome.com/4c971d825c.js" crossorigin="anonymous"></script>
    
</head>

<div id="mestre" >
    <a href="" id='menu' class="fa-solid fa-ellipsis"></a>
    <abbr title="Home">
        <a href="home.php" class="fa-solid fa-house"></a>
    </abbr>        
    <abbr title="Loja">
        <a href="store.php" id='' class="fa-solid fa-cart-shopping"></a>
    </abbr>
    <abbr title="Promoções">
        <a href="promocao.html" id=''class="fa-solid fa-dumpster-fire"></a>
    </abbr>        
    <abbr title="Museu dos Games">
        <a href="home.php" id=''class="fa-solid fa-vr-cardboard"></a>
    </abbr>        
    <abbr title="Campeonato">
        <a href="home.php" id=''class="fa-solid fa-trophy"></a>
    </abbr>        
    <abbr title="Contato">
    <a href="landing_page.php" id=''class="fa-solid fa-headset"></a>
    </abbr>        
    <abbr title="Enquete">
        <a href="home.php" id=''class="fa-solid fa-gauge-high"></a>
    </abbr>
    <abbr title="Painel do Administrador">    
        <a href="admin/login.php" id=''class="fa-solid fa-chess-king"></a>
    </abbr>
</div>
