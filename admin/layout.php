<?php session_start(); 
$seguranca = isset($_SESSION['ativa']) ? TRUE : header('location: login.php');
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_admin.css">
    <title>Painel admin - Layout</title>
</head>
<body>
<?php if($seguranca) { ?>
        
    <h1>Painel administrativo do site</h1>
    <h3>Olá <?php echo $_SESSION['nome']; ?>, seja bem vindo!</h3>
    
    <?php include "layout/menu.php" ?>

    <h3>Gerencia de Layout</h3>
<?php 
    $tabela = 'cardapio';  
    $order = 'titulo';  
    $cardapios = buscar($connect, $tabela, 1, $order);
    
    
    if (isset($_GET['id'])) { ?>
        <h2>Tem certeza que deseja deletar do cardápio o item: <?php echo $_GET['titulo']; ?></h2>
        <form action='cardapio.php' method='post'>
            <input type='hidden' name='id' value='<?php echo $_GET['id'] ?>'>
            <input type='submit' name='deletar' value='Deletar'>
        </form>    
    <?php }   
        if (isset($_POST['deletar']) AND !empty($_POST['id'])) {
            deletar($connect, "cardapio", $_POST['id']);
            }     
            
    ?>
    <div class='container'>
                
        
        <?php include "skins.php" ?>


    </div>
  
    <?php include "layout/footer.php" ;
    
    updateSkin($connect, $_POST['skin']);
    ?>

<?php }?>
    
</body>
</html>