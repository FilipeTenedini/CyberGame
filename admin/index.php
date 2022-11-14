<?php session_start(); 
$seguranca = isset($_SESSION['ativa']) ? TRUE : header('location: login.php');
$Admin = isset($_SESSION['papelAdmin']) ? 1 : header('location: login.php');
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
</head>
<body>
<?php if($seguranca) { ?>
        
    <h1>Painel administrativo do site</h1>
    <h3>Bem vindo, <?php echo $_SESSION['nome']; ?></h3>
    
    

    <nav>
        <div>
            <a href='index.php'>Painel</a>
            <a href='users.php'>Gerenciar Usuários</a>
            <a href='logout.php'>Sair</a>
            <a href='#'>--</a>
        </div>
    </nav>

<?php }?>
    
</body>
</html>