<?php session_start(); 
$seguranca = isset($_SESSION['ativa']) ? TRUE : header('location: login.php');
require_once 'functions.php';
//INSERIR ITEM
insertCardapio($connect);
if (isset($_POST['update'])) {
    updateCardapio($connect);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin - Cardápio</title>
</head>
<body>
<?php if($seguranca) { ?>
        
    <h1>Painel administrativo do site</h1>
    <h3>Bem vindo, <?php echo $_SESSION['nome']; ?></h3>
    <h2>Gerenciador do Cardápio</h2>
    
    <?php include "layout/menu.php" ?>
<?php 
    $id='';
    $titulo='';
    $descricao='';
    $data= date('d-m-Y');
    $action='insert';
?>
    <?php          
        if (isset($_GET['id'])) {
            $idGet = $_GET['id'];            
            $itemCardapio = buscaUnica($connect, "cardapio", $idGet);
            if (!empty($itemCardapio['titulo'])) {
                $id = $itemCardapio['id'];
                $titulo = $itemCardapio['titulo'];
                $descricao = $itemCardapio['descricao'];
                $data = $itemCardapio['dataRegistro'];
                $action ='update'; 
                
            }; 
        }
    ?>            

    <form action='' method='post' enctype="multipart/form-data">
        <fieldset>
            <legend>Inserir/editar item do cardápio</legend>
        
            <input value ="<?php echo $id; ?>" type="hidden" name='id' required>
        
        <?php 
            if (!empty($itemCardapio['imagem'])) { ?>
                <div>
                    <img width="260px" src="imagens/uploads/<?php echo $itemCardapio['imagem']; ?>" alt="<?php $titulo ?>">  
                </div>
           <?php }
        ?>
        
        <div>    
            <input type="file" name="imagem">
        </div><div>    
            <input value ="<?php echo $titulo; ?>" type="text" name='titulo' placeholder='Titulo'required>
        </div><div>    
            <textarea name="descricao" required><?php echo $descricao; ?></textarea>
        </div><div>
            <input value ="<?php echo $data; ?>" type="date" name='dataRegistro' required>
        </div><div>
            <input type="submit" name='<?php echo $action ?>' value='Salvar'>
        </div>
        </fieldset>
    </form>

<?php }?>
    
</body>
</html>