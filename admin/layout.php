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
       
    

    <div class='container'>
                
        
        <?php include "skins.php" ?>


    </div>
  
    <?php include "layout/footer.php" ;
    
    updateSkin($connect, $_POST['skin']);
    ?>

<?php }?>
    
</body>
</html>