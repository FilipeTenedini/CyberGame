<?php session_start(); 
$seguranca = isset($_SESSION['ativa']) ? TRUE : header('location: login.php');
$admin = isset($_SESSION['papelAdmin']) ? 1 : header('location: login.php');
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_admin.css">
    <title>Painel Admin</title>
    <style>
    </style>
</head>
<body>
<?php if($seguranca) { ?>
        
    <h1>Painel administrativo do site</h1>
    <h3>Olá <?php echo $_SESSION['nome']; ?>, seja bem vindo!</h3>
    
    

    <?php include "layout/menu.php" ?>

    <?php include "layout/footer.php" ?>

<?php }?>
    
</body>
</html>