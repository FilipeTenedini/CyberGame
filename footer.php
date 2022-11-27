<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>


    footer{
        width: calc(100vw -10px);
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #000;
    }
    .footer-persons{
        width: 80%;
        color: #FFF;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
    }
    .footer-persons .person{
        flex: 1;
        margin-right: 120px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .person:last-child{
        margin-right: 0px;
    }    
    .person .person-name,
    .person .person-picture{
        margin-bottom: 20px;
    }
    .person-name{
        font-size: 22px;
    }
    .footer-persons .person .person-picture img{
        width: 80px;
        height: 80px;
        border-radius: 30px;
    }

    .person-git a{
        text-decoration:underline;
        color: #FFF;
        font-size: 18px;
    }
</style>
</head>
<footer>
    <div class="footer-persons">
        <div class="person 1">
            <div class="person-name">Filipe Tenedini</div>
            <div class="person-picture"><img src="./assets/img/fotoFilipe.jfif" alt=""></div>
            <div class="person-git"><a href="https://github.com/FilipeTenedini">Github</a></div>
        </div>
        <div class="person 2">
            <div class="person-name">Hariel Mendonça</div>
            <div class="person-picture"><img src="./assets/img/fotoHariel.jfif" alt=""></div>
            <div class="person-git"><a href="https://github.com/Hariel007">Github</a></div>
        </div>
        <div class="person 3">
            <div class="person-name">Leonardo Machado</div>
            <div class="person-picture"><img src="./assets/img/fotoLeonardo.jfif" alt=""></div>
            <div class="person-git"><a href="https://github.com/leo-md">Github</a></div>
        </div>
        <div class="person 4">
            <div class="person-name">Pietro Del Corona</div>
            <div class="person-picture"><img src="./assets/img/pietroFoto.jpg" alt=""></div>
            <div class="person-git"><a href="https://github.com/PietroDelCorona">Github</a></div>
        </div>
    </div>
</footer>