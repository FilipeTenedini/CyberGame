<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4c971d825c.js" crossorigin="anonymous"></script>
    <style>

        #mestre {
            width: 50px;
            height: 50px;
            background-color: azure;
            color: #222;
            border-radius: 25px;
            margin: 20px;
            box-shadow:10px 10px 10px 0 rgba(0,0,0,0.3);
            transition: all 1s;
            display: flex;
            align-items: center;
            flex-direction: column;
            overflow: hidden;
            position: fixed;
            
        }

        #mestre:hover {
            animation-name: chamaMenu;
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        #mestre:hover #menu{
            transform: rotate(90deg);
        }

        #menu {
            margin-bottom: 1px;
            transition: 1s;
        }


        a {
            float: top;
            font-size: 30px;
            margin: 10px;
            color: #000;
            text-decoration: none;
        }

        @keyframes chamaMenu{
            from {
                height: 50px;
            }

            to {
                height: 450px;
            }
        }




    </style>
</head>

<div id="mestre" >
        <a href="" id='menu' class="fa-solid fa-ellipsis"></a>
        <a href="" class="fa-solid fa-mobile-screen"></a>
        <a href="" id=''class="fa-brands fa-playstation"></a>
        <a href="" id=''class="fa-brands fa-xbox"></a>
        <a href="" id=''class="fa-solid fa-vr-cardboard"></a>
        <a href="" id=''class="fa-solid fa-trophy"></a>
        <a href="" id=''class="fa-solid fa-headset"></a>
        <a href="" id=''class="fa-solid fa-gauge-high"></a>
        <a href="" id=''class="fa-solid fa-chess-king"></a>
</div>