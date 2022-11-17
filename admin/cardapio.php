<?php session_start(); 
$seguranca = isset($_SESSION['ativa']) ? TRUE : header('location: login.php');
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel admin - CArdápio</title>
</head>
<body>
<?php if($seguranca) { ?>
        
    <h1>Painel administrativo do site</h1>
    <h3>Bem vindo, <?php echo $_SESSION['nome']; ?></h3>
    <h2>Gerenciador de Cardápios</h2>
    
    <?php include "layout/menu.php" ?>
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
        <div>
            <a href="formCardapio.php">Inserir novo item</a>
        </div>
        <table border='1'>
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Data Cadastro</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($cardapios as $cardapio):?>
                    <tr>
                        <td>
                            <?php if (!empty($cardapio['imagem'])) { ?>
                                <img width="80px"src="imagens/uploads/<?php echo $cardapio['imagem'];?>" alt="<?php echo $cardapio['titulo'];?>"></td>
                            <?php }
                            ?>
                        <td><?php echo $cardapio['titulo'];?></td>
                        <td><?php echo $cardapio['dataRegistro'];?></td>
                        <td>
                            <a href="cardapio.php?id=<?php echo $cardapio['id'];?>&titulo=<?php echo $cardapio['titulo']?>">Excluir</a>
                            | 
                            <a href="formCardapio.php?id=<?php echo $cardapio['id'];?>&titulo=<?php echo $cardapio['titulo']?>">Atualizar</a>
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