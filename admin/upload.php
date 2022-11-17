<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="nome" placeholder="Seu nome">
        <input type="file" name="arquivo">
        <input type="submit" name="enviar">
    </form>

    <?php
        if (isset($_POST['enviar'])) {
            //print_r($_FILES['arquivo']);
            if (!empty($_FILES['arquivo']['name'])) {
                $nomeArquivo = $_FILES['arquivo']['name'];
                $tipo = $_FILES['arquivo']['type'];
                $nomeTemporario = $_FILES['arquivo']['tmp_name'];
                $tamanho = $_FILES['arquivo']['size'];
                $erros = array();

                $tamanhoMaximo = 1024 * 1024 * 5; //+/- 5 mb
                if ($tamanho > $tamanhoMaximo) {
                    $erros[] = 'Seu arquivo excede o tamanho máximo (5mb).<br>';
                }
                
                $arquivosPermitidos = ["png", "jpg", "jpeg"];
                $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
                if (!in_array($extensao, $arquivosPermitidos)) {
                    $erros[] = 'Seu arquivo não possui uma extensão permitida (png, jpg, jpeg).<br>';
                }

                $typesPermitidos = ["image/png","image/jpg","image/jpeg"];
                if (!in_array($tipo, $typesPermitidos)) {
                    $erros[] = 'Seu arquivo não possui um tipo permitido (png, jpg, jpeg).<br>';

                }
                if (!empty($erros)) {
                    foreach ($erros as $erro) {
                        echo $erro;
                    }
                }else{
                    $caminho = "uploads/";
                    $hoje = date("d-m-Y_h-i-s");
                    $user = $_POST['nome'];
                    //$novoNome = $hoje."-".$nomeArquivo;
                    $novoNome = $user."-".$nomeArquivo;
                    if(move_uploaded_file($nomeTemporario, $caminho.$novoNome)){
                        echo 'Upload feito com sucesso';
                    }else{
                        echo 'Erro ao enviar';
                    }
                    
                }
            }
        }
    ?>
    
</body>
</html>