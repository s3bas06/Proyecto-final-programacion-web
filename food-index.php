<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine totalus</title>
    <link rel="stylesheet" href="styles/food-index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https: //fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php
        require 'header.php';
        require 'php_codes/functions.php';
        session_start();
    ?>

    <main>
        <div class="main-information">
            <div class="information">
                <div class="information-title"><h1>Promociones de alimentos.</h1></div>
                <div class="information-body"><p>El mejor combo el cual puedes comprar para compartir contigo y con tu familia en esta salida al cine</p></div>
                <div class="information-button"><button>Más información</button></div>
            </div>

            <div class="main-information-img">
                <img src="food/combo3.jpg">
            </div>
        </div>

        <div class="display-option"></div>
    </main>

    <div class="cine-selection">
        <label class="cine-title">Selecciona alimentos y añadelos a tu carrito</label>
    </div>

    <section class="food-start">
        <div class="food">
            <div class="food-section">
                <h1>Combos</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Combo 1</h3>
                        <img src="food/combo2.jpg" alt="">
                        <button class="combo-btn" class ="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 2</h3>
                        <img src="food/combo3.jpg" alt="">
                        <button class="combo-btn" class ="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 3</h3>
                        <img src="food/combomediano.jpg" alt="">
                        <button class="combo-btn" class ="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 4</h3>
                        <img src="food/combocuates.jpg" alt="">
                        <button class="combo-btn" class ="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 5</h3>
                        <img src="food/combo5.jpg" alt="">
                        <button class="combo-btn" class ="combo-btn-1"><b>Agregar</b></button>
                    </div>
                </div>
            </div>

            <div class="food-section">
                <h1>Palomitas</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Palomitas 1</h3>
                        <img src="food/palimitasmantequilla.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Palomitas 2</h3>
                        <img src="food/bolsa.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Palomitas 3</h3>
                        <img src="food/takis.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Palomitas 4</h3>
                        <img src="food/caramelo.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                </div>
            </div>

            <div class="food-section">
                <h1>Bebidas</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Bebida 1</h3>
                        <img src="food/fanta.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 2</h3>
                        <img src="food/pepsi.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 3</h3>
                        <img src="food/cocacola.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 4</h3>
                        <img src="food/sprite.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 5</h3>
                        <img src="food/fantadefresa.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                </div>
            </div>

            <div class="food-section">
                <h1>Dulces</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Dulce 1</h3>
                        <img src="food/chocolate.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Dulce 2</h3>
                        <img src="food/chocolate2.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Dulce 3</h3>
                        <img src="food/chocolate3.jpg" alt="">
                        <button class="combo-btn-1"><b>Agregar</b></button>
                    </div>
                </div>
            </div>
        </div> 

        <div class="cart-container">
            <header class="cart-header">
              <h1>Tu carrito</h1>
              <span class="cart-total">$8.00</span>
            </header>
        
            <div class="food-section">
              <h3>Alimentos</h3>
              <p id="food-message">No has agregado alimentos a tu orden</p>
            </div>
        
            <div class="totals">
                <p>Subtotal: <span id="subtotal">$0.00</span></p>
                <p>Cargo por servicio: <span>$8.00</span></p>
                <p class="grand-total">Total: <span id="total">$8.00</span></p>
            </div>
            <form action="php_codes/goPayFood.php">
            <button class="pay-button">Siguiente</button>
            </form>
        </div>
    </section>

    <section class="modal">
        <div class="modal-container">
            <div class="modal-title"><h1>Detalles del alimento</h1></div>
            <div class="food-details">
                <h2>Tamaño</h2>
                <div class="chexkbox-container">
                    <label for="small">
                        <input type="radio" name="option" id="size">
                        Pequeñas
                    </label>
                    <label for="medium">
                        <input type="radio" name="option" id="size">
                        Medianas
                    </label>
                    <label for="big">
                        <input type="radio" name="option" id="size">
                        Grandes
                    </label>
                    <label for="take-out">
                        <input type="radio" name="option" id="size">
                        Para llevar
                    </label>
                </div>
                <h2>Sabor de las palomitas</h2>
                <div class="chexkbox-container">
                    <label for="caramel">
                        <input type="checkbox" name="pequeñas" id="">
                        Caramelo
                    </label>
                    <label for="butter">
                        <input type="checkbox" name="medianas" id="">
                        Mantequilla
                    </label>
                    <label for="takis-fuego">
                        <input type="checkbox" name="Grandes" id="">
                        Takis fuego
                    </label>
                    <label for="normal">
                        <input type="checkbox" name="Grandes" id="">
                        Normales
                    </label>
                </div>
                <h2>Sabor de tu refresco</h2>
                <div class="chexkbox-container">
                    <label for="pequeñas">
                        <input type="checkbox" name="pequeñas" id="">
                        Pequeñas
                    </label>
                    <label for="pequeñas">
                        <input type="checkbox" name="medianas" id="">
                        Medianas
                    </label>
                    <label for="pequeñas">
                        <input type="checkbox" name="Grandes" id="">
                        Grandes
                    </label>
                    <label for="pequeñas">
                        <input type="checkbox" name="Grandes" id="">
                        Para llevar
                    </label>
                </div>
            </div>

            <button class="confirm-button">Confirmar</button>
        </div>
    </section>

    <?php
        require 'footer.php';
    ?>

    <footer class="show-cart">
        <a href="payFood.php">
        <input type="button" value="Siguiente">
        </a>
    </footer>
    <script src="js/modal.js"></script>

    <script>
    const payButton = document.querySelector('.pay-button');
    payButton.disabled = true;
    const addButtons = document.querySelectorAll('.combo-btn-1, .combo-btn');
    addButtons.forEach((button) => {
        button.addEventListener('click', function () {
            payButton.disabled = false;
            const foodName = this.parentElement.querySelector('h3').textContent;
            const foodMessage = document.getElementById('food-message');
            const subtotal = document.getElementById('subtotal');
            const total = document.querySelector('#total');
            const bigTotal = document.querySelector('.cart-total');
            const showCart = document.querySelector('.show-cart');

            if (foodMessage.textContent === "No has agregado alimentos a tu orden") {
                foodMessage.textContent = foodName;
            } else {
                foodMessage.textContent += `, ${foodName}`;
            }

            let subtotalActual = parseFloat(subtotal.textContent.replace('$', '')) || 0; // Eliminar '$' antes de convertir
            subtotalActual += 14;
            subtotal.textContent = '$' + subtotalActual.toFixed(2);

            total.textContent = '$' + (subtotalActual + 8).toFixed(2);
            bigTotal.textContent = total.textContent;

            document.cookie = `foodOrder=${encodeURIComponent(foodMessage.textContent)}; path=/; max-age=3600;`;
            document.cookie = `total=${encodeURIComponent(total.textContent)}; path=/; max-age=3600`
            document.cookie = `subtotal=${encodeURIComponent(subtotal.textContent)}; path=/; max-age=3600`

            if(window.innerWidth < 768){
            showCart.style.opacity = "1";
            }
        });
    });
</script>

</body>
</html>