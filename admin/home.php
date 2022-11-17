<?php require_once "functions.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
</head>
<body>
    <section id="cardapio">
        <div class="container">
            <h2 class="title">Veja nossas fotos</h2>
            <div class="cardapio">
            <?php $cardapio = buscar($connect, 'cardapio');        
                foreach ($cardapio as $item) : ?>
                <div class="bloco-3">
                    <div class="imagem">
                        <img width="250px" src="imagens/uploads/<?php echo $item['imagem'] ?>" alt="foto1">
                    </div>
                    <div class="infos-prato">
                        <h3><?php echo $item['titulo'] ?></h3>
                        <p><?php echo $item['descricao'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>   
        </div>
    </section>
</body>
</html>