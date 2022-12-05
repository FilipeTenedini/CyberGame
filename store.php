<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/store.css">   
    <title>CYBERGAMES</title>
</head>
<body>
    <div class="models">
        <div class="game">
            <div class="game-card">
                <div class="game-title">--</div>
                <div class="game--img"><img src="" alt=""></div>
                <div class="game-desc">--</div>
                <div class="game-price">--</div>
                <a href="#" class="button"><button>reserve</button></a>
            </div>            
        </div>
        <div class="cart-item--area">
            <div class="cart-item--img"><img src="" alt=""></div>
            <div class="cart-item--nome">-- </div>
            <div class="cart-item--preco">--</div>
            <div class="cart-qtd">
                <div class="cart-qtmenos">-</div>
                <div class="cart-qt">-- </div>
                <div class="cart-qtmais">+</div>
            </div>
        </div>
    </div>

    <div class="game--modal-area bg">
        <div class="modal">
            <div class="modal-cart">
                <div class="modal-desc">
                    <div class="modal-img"><img src="./assets/img/bg2.jpg" alt=""></div>
                </div>
                <div class="modal-reserve">
                    <div class="modal-reserve--title">--</div>
                    <div class="description">
                        <span>--</span>
                    </div>
                    <div class="reserve">Quantas reservas?</div>

                    <div class="info-price">
                        <div class="info-quantity">
                            <div class="info-qt--menos">-</div>
                            <div class="info-qt"> 0 </div>
                            <div class="info-qt--mais">+</div>
                        </div>
                    </div>
                    <div class="modal-buttons">
                        <a class="button"><button>Cancelar</button></a>
                        <a class="button"><button>Reservar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-store">
        <?php require "./menuLateral.php" ?>
        <div class="header-store-symbol">CYBERGAMES</div>
    </header>

    <main class="store">3        
        <h1>Sua loja</h1>
        <section class="store-games">
            <div class="games-show"> </div>
        </section>
        <div class="degrade2"></div>
    </main>



    <aside>
        <div class="cart">
            <div class="cart-items">
                <div class="cart-title">Suas reservas</div>
                <div class="cart--reserve-items"> </div>
            </div>
            <div class="cart-prices">
                <div class="subtotal">
                    <div class="subtotal-txt">Subtotal: </div>
                    <div class="subtotal-price">--</div>
                </div>
                <div class="desc">
                    <div class="desc-txt">Desc <span>(10%)</span>: </div>
                    <div class="desc-price">--</div>
                </div>
                <div class="total">
                    <div class="total-txt">Total: </div>
                    <div class="total-price">--</div>
                </div>
                <a href="#k" class="button"><button>Reservar</button></a>
            </div>
        </div>
    </aside>

    <?php require "./footer.php" ?>
<script src="./assets/js/games.js"></script>
<script src="./assets/js/storeScript.js"></script>
</body>
</html>