<?php session_start(); 
$seguranca = isset($_SESSION['ativa']) ? TRUE : header('location: login.php');
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
<?php if($seguranca) { ?>
        
    <h1>Painel administrativo do site</h1>
    <h3>Bem vindo, <?php echo $_SESSION['nome']; ?></h3>
    <h2>Gerenciador de usuários</h2>
    
    <?php include "layout/menu.php" ?>
<?php 
    $tabela = 'usuarios';  
    $order = 'nome';  
    $usuarios = buscar($connect, $tabela, 1, $order); 
?>
    <?php          
        if (isset($_GET['id'])) {
            $id = $_GET['id'];            
            $usuario = buscaUnica($connect, "usuarios", $id); 
            updateUser($connect);   
        ?>
            <h2> Editando o usuário <?php echo $_GET['nome']; ?>
        
    <?php } ?>

    <form action='' method='post'>
        <fieldset>
            <legend>Editar Usuários</legend>
            <input value ="<?php echo $usuario['id']; ?>" type="hidden" name='id' required>
            <input value ="<?php echo $usuario['nome']; ?>" type="text" name='nome' placeholder='Nome'required>
            <input value ="<?php echo $usuario['email']; ?>" type="email" name='email' placeholder='E-mail' required>
            <input type="password" name='senha' placeholder='Senha'>
            <input type="password" name='repetesenha' placeholder='Confirme sua senha'>
            <input value ="<?php echo $usuario['dataCadastro']; ?>" type="date" name='dataCadastro' required>
            <input type="submit" name='atualizar' value='Atualizar'>
        </fieldset>
    </form>

<?php }?>
    
</body>
</html>