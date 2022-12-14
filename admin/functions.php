<?php

$dbHost ='localhost';
$dbUser ='root';
$dbPass ='';
$dbName ='projetoCyberGames';

$connect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

function login($connect){
    if (isset($_POST['acessar']) AND !empty($_POST['email']) AND !empty($_POST['senha'])) {
        
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = sha1($_POST['senha']);
        $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
        $executar = mysqli_query($connect, $query);
        $return = mysqli_fetch_assoc($executar);
        if (!empty($return['email'])) {
            //echo 'Bem vindo '.$return['nome'];
            session_start();
            $_SESSION['nome'] = $return['nome'];
            $_SESSION['id'] = $return['id'];
            $_SESSION['ativa'] = TRUE;
            $_SESSION['papelAdmin'] = $return['papelAdmin'];
            if ($_SESSION['papelAdmin'] == 1) {
                header("location: index.php");
            }else{
                header("location: perfil.php");
            }            
        }else{
            echo 'Usuário ou senha não encontrados';
        }        
    }
}

function logout(){
    session_start();
    session_unset();
    session_destroy();
    header('location: login.php');
}
/*Seleciona(busca) no BD apenas um resultado com bse no ID*/
function buscaUnica($connect, $tabela, $id){
    $query = "SELECT * FROM $tabela WHERE id ="  . (int) $id;
    $execute = mysqli_query($connect, $query);
    $result = mysqli_fetch_assoc($execute);
    return $result;
}
/*Seleciona(busca) no BD apenas um resultado com bse no WHERE*/
function buscar($connect, $tabela, $where = 1, $order=""){
    if (!empty($order)) {
        $order = "ORDER BY $order";
    }
    $query = "SELECT * FROM $tabela WHERE $where $order";
    $execute = mysqli_query($connect, $query);
    $results = mysqli_fetch_all($execute, MYSQLI_ASSOC);
    return $results;
}
/*Inserir novos usuários*/
function inserirUsuarios($connect){

    if ((isset($_POST['cadastrar']) AND !empty($_POST['email']) AND !empty($_POST['senha'])) ) {
        $erros = array();
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $nome = mysqli_real_escape_string($connect, $_POST['nome']);
        $senha = sha1($_POST['senha']);

        if ($_POST['senha'] != $_POST['repetesenha']) {
            $erros[] = "Senhas não conferem";
        }        
        $queryEmail =  "SELECT email FROM usuarios WHERE email= '$email'";
        $buscaEmail =   mysqli_query($connect, $queryEmail);
        $verifica = mysqli_num_rows($buscaEmail);

        if (!empty($verifica)) {
            $erros[] = "E-mail já cadastrado.";
        }
        if (empty($erros)) {
            //inserir o usuário no BD
            $query = "INSERT INTO usuarios (nome, email, senha, dataCadastro, papelAdmin) VALUES ('$nome' , '$email' , '$senha' , NOW() , 1)";
            $executar = mysqli_query($connect, $query);
            if ($executar) {
                echo "Usuario inserido com sucesso!";
            } else {
                echo "Erro ao inserir o usuário.";
            }
       
        }else{
            foreach ($erros as $erro) {
                echo "<p>$erro</p>";
            }            
        }    
    }
}
//Deletar algum dado
function deletar($connect, $tabela, $id){
    if (!empty($id)) {
        $query = "DELETE FROM $tabela WHERE ID =" . (INT) $id;
        $execute = mysqli_query($connect, $query);
        if ($execute) {
            echo "Dado deletado com sucesso!";
        } else {
            echo "Erro ao deletar!";
        }
    }
}

function updateUser($connect){
    if (isset($_POST['atualizar']) AND !empty($_POST['email'] ) ) {
        $erros = array();
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $nome = mysqli_real_escape_string($connect, $_POST['nome']);
        $senha = '';
        $data = mysqli_real_escape_string($connect, $_POST['dataCadastro']);

        if (empty($data)) {
            $erros[] = 'Preencha a data de cadastro.';
        }
        if (empty($email)) {
            $erros[] = 'Preencha seu e-mail corretamente.';
        }
        if (strlen($nome) < 4) {
            $erros[] = 'Preencha o nome completo.';
        }
        if (!empty($_POST['senha'])) {
            if ($_POST['senha'] == $_POST['repetesenha']) {
                $senha = sha1($_POST['senha']);               
            }else{
                $erros[] = "Senhas não conferem";
            }
        }
        $queryEmailAtual = "SELECT email FROM usuarios WHERE id = $id";
        $buscaEmailAtual = mysqli_query($connect, $queryEmailAtual);
        $retornoEmail = mysqli_fetch_assoc($buscaEmailAtual);
                        
        $queryEmail =  "SELECT email FROM usuarios WHERE email= '$email' AND email <> '" . $retornoEmail['email'] . "'";
        $buscaEmail =   mysqli_query($connect, $queryEmail);
        $verifica = mysqli_num_rows($buscaEmail);

        if (!empty($verifica)) {
            $erros[] = "E-mail já cadastrado.";
        }

        if (empty($erros)) {
            //UPDATE usuario
            if (!empty($senha)) {
                $query = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha', dataCadastro = '$data' WHERE id =" . (int) $id;
            }else{
                $query = "UPDATE usuarios SET nome = '$nome', email = '$email', dataCadastro = '$data' WHERE id =" . (int) $id;
            }
            $executar = mysqli_query($connect, $query);
            if ($executar) {
                echo "Usuario atualizado com sucesso!";
            } else {
                echo "Erro ao atualizar o usuário.";
            }
        }else{
            foreach ($erros as $erro) {
                echo "<p>$erro</p>";
            } 
        }
    }    
}

function updateSkin($connect, $skin){
    if (isset($_POST['aplicar'])) {
        //UPDATE usuario
        $query = "UPDATE skins SET nome = '$skin' WHERE id = 1";
        $executar = mysqli_query($connect, $query);
        if ($executar) {
            echo "Usuario atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar o usuário.";
        }
         
        
    }    
}


function buscaEstilo($connect){
    $estilo = buscaUnica($connect, 'skins', 1);
    return $estilo['nome'];   
}

// Usando a Landing Page
function inserirContato($connect) {
    if (!empty($_POST['nome_contato']) and !empty($_POST['email_contato'])) {
        //$emailContato = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $emailContato = $_POST['email_contato'];
        $nome = $_POST['nome_contato'];
        $queryContato = "INSERT INTO contatos (nome , email) VALUES('$nome' , '$emailContato')";
        $executar = mysqli_query($connect, $queryContato);
        if ($executar) {
            echo "Usuario inserido com sucesso!";
        } else {
            echo "Erro ao inserir o usuário.";
        }
    }
    }
