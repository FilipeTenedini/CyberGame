<?php require_once 'functions.php';
$skin = 'black';
$skin = buscaEstilo($connect, 'skins');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de acesso ao site</title>
    <link rel="stylesheet" href="css/style_<?php echo $skin; ?>.css">
</head>
<body>
    <form action='' method='post'>
        <fieldset>
            <legend>Painel de Login</legend>
            <input type='email' name='email' placeholder='Informe seu e-mail' requered>
            
            <input type='password' name='senha' placeholder='Insira sua senha' requered>
            
            <input type='submit' name='acessar' value='Acessar'>
        
        </fieldset>
    </form>
       
</body>
<?php 
if (isset($_POST['acessar'])) {
    login($connect);
}
?>
</html>