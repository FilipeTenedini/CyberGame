c = (el) => document.querySelector(el)
cs = (el) => document.querySelectorAll(el)

// variaveis de ambiente;
let letQt = 1;
let cart = [];
let position = '';

window.addEventListener('load',() =>{
    c('h1').style.opacity = 1;
});

everJson.forEach((item, index) => {
    let gameItem = c('.models .game').cloneNode(true);


    gameItem.querySelector('.game-title').innerHTML = item.name;
    gameItem.querySelector('.game--img img').src = item.img;
    gameItem.querySelector('.game-desc').innerHTML = item.desc;
    gameItem.querySelector('.game-price').innerHTML = item.price;



    gameItem.querySelector('button').addEventListener('click', (e) => {
        e.preventDefault();
        letQt = 1;
        position = index;


        c('.modal-img img').src = item.img;
        c('.modal-reserve--title').innerHTML = item.name;
        c('.description span').innerHTML = item.desc;
        c('.info-qt').innerHTML = letQt;

        // abrindo o modal
        c('.game--modal-area').style.opacity = 0;
        c('.game--modal-area').style.display = 'flex';
        setTimeout(()=>{
            c('.game--modal-area').style.opacity = 1;
        }, 5);
    });


    c('.games-show').append(gameItem)
});

c('.info-qt--mais').addEventListener('click', () => {
    letQt++;
    c('.info-qt').innerHTML = letQt;
});
c('.info-qt--menos').addEventListener('click', () => {
    if (letQt > 1) {
        letQt--;
        c('.info-qt').innerHTML = letQt;
    } else {
        closeModal();
    }
});


function closeModal(){
    c('.game--modal-area').style.opacity = 0;
    setTimeout(()=>{ 
        c('.game--modal-area').style.display = 'none';
        }, 300);
} ;


cs('.modal-reserve .button')[0].addEventListener('click', () => {
    closeModal();
    if (cart.length > 0){
        c('aside').style.right = '0px';
    };
});


cs('.modal-reserve .button')[1].addEventListener('click', () => {    

    let localItem = cart.findIndex((item) => item.id == everJson[position].id)
    if (localItem > -1) {
        everJson[position].qt += letQt;
    } else{
        everJson[position].qt = letQt;
        cart.push(everJson[position]) 
    }
    updateCart();
    closeModal();
});



function updateCart() {
    let subtotal = 0;
    let desconto = 0
    let total = 0;

    if (cart.length > 0 ){
        c('aside').style.right = '0px'
        c('.game--modal-area').style.margin = 'auto'
        c('.cart--reserve-items').innerHTML = '';

        for (let i in cart){
            let itemCart = c('.models .cart-item--area').cloneNode(true);
            let choicedItem = everJson.find((item) => item.id == cart[i].id )
            
            subtotal += choicedItem.price * choicedItem.qt;
    
            itemCart.querySelector('.cart-item--img img').src = choicedItem.img
            itemCart.querySelector('.cart-item--nome').innerHTML = choicedItem.name
            itemCart.querySelector('.cart-item--preco').innerHTML = `R$ ${choicedItem.price.toLocaleString('pt-br')}`
            itemCart.querySelector('.cart-qt').innerHTML = choicedItem.qt;
                        
            itemCart.querySelector('.cart-qtmenos').addEventListener('click', () => {
                if (choicedItem.qt > 1){
                    choicedItem.qt--;
                } else {
                    cart.pop(choicedItem);
                }
                updateCart();

            });
            itemCart.querySelector('.cart-qtmais').addEventListener('click', () => {
                choicedItem.qt++;
                updateCart();
            });

            c('.cart--reserve-items').append(itemCart) 
        }
        

        desconto = subtotal * 0.10;
        total = subtotal - desconto;
        c('.subtotal-price').innerHTML = `R$ ${subtotal.toLocaleString('pt-br')}`;
        c('.desc-price').innerHTML = `R$ ${desconto.toLocaleString('pt-br')}`;
        c('.total-price').innerHTML = `R$ ${total.toLocaleString('pt-br')}`;
    } else {
        c('aside').style.right = '-3000px'
    }

};

c('.cart button').addEventListener('click', () => {
    document.location.reload(true)
});