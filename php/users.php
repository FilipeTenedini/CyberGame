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
    
    <nav>
        <div>
            <a href='index.php'>Painel</a>
            <a href='users.php'>Gerenciar Usuários</a>
            <a href='logout.php'>Sair</a>
            <a href='#'>--</a>
        </div>
    </nav>
<?php 
    $tabela = 'usuarios';  
    $order = 'nome';  
    $usuarios = buscar($connect, $tabela, 1, $order); 
    inserirUsuarios($connect);

    if (isset($_GET['id'])) { ?>
        <h2>Tem certeza que deseja deletar o usuário <?php echo $_GET['nome']; ?></h2>
        <form action='' method='post'>
            <input type='hidden' name='id' value='<?php echo $_GET['id'] ?>'>
            <input type='submit' name='deletar' value='Deletar'>
        </form>    
    <?php } ?>
    <?php  
        if (isset($_POST['deletar'])) {
            if ($_SESSION['id'] != $_POST['id']) {
                deletar($connect, "usuarios", $_POST['id']);
            } else {
                echo "Cara!! Você não pode deletar seu próprio usuário!!!";
            }
            
        }
            
    ?>

    <form action='' method='post'>
        <fieldset>
            <legend>Inserir Usuários</legend>
            <input type="text" name='nome' placeholder='Nome'>
            <input type="email" name='email' placeholder='E-mail'>
            <input type="password" name='senha' placeholder='Senha'>
            <input type="password" name='repetesenha' placeholder='Confirme sua senha'>
            <input type="submit" name='cadastrar' value='Cadastrar'>
        </fieldset>
    </form>

    <div class='container'>
        <table border='1'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Data Cadastro</th>
                    <th>Papel</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($usuarios as $usuario):?>
                    <tr>
                        <td><?php echo $usuario['id'];?></td>
                        <td><?php echo $usuario['nome'];?></td>
                        <td><?php echo $usuario['email'];?></td>
                        <td><?php echo $usuario['dataCadastro'];?></td>
                        <td><?php echo $usuario['papelAdmin'];?></td>
                        <td>
                            <a href="users.php?id=<?php echo $usuario['id'];?>&nome=<?php echo $usuario['nome']?>">Excluir</a>
                        </td>
                    </tr>



                <?php endforeach;
                ?>
            </tbody>



        </table>

    </div>

<?php }?>
    
</body>
</html>