<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de la pelicula</title>
    <link rel="stylesheet" href="styles/food.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <?php
        require 'header.php';
    ?>
    
    <main>
        <div class="food">
            <h1 class="food-title">Seleccion de alimentos</h1>
            <div class="food-section">
                <h1>Combos</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Combo 1</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 2</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 3</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 4</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 5</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                </div>
            </div>

            <div class="food-section">
                <h1>Palomitas</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Palomitas 1</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Palomitas 2</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Palomitas 3</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Palomitas 4</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                </div>
            </div>

            <div class="food-section">
                <h1>Bebidas</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Bebida 1</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 2</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 3</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 4</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 5</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                </div>
            </div>

            <div class="food-section">
                <h1>Dulces</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Dulce 1</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Dulce 2</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Dulce 3</h3>
                        <img src="assets/rectangle.png" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                </div>
            </div>
        </div> 

        <div class="cart-container">
            <header class="cart-header">
              <h1>Tu carrito</h1>
              <span class="cart-total">$50.00</span>
            </header>
        
            <div class="cart-item">
              <img src="assets/angry-birds-cart.png" alt="Angry Birds" class="movie-poster">
              
              <div class="movie-info">
                <h2>Angry Birds</h2>
                <p><strong>Clasificación:</strong> A</p>
                <p><strong>Duración:</strong> 107 min</p>
                <p class="age-appropriate">Película apta para todo público</p>
              </div>
            </div>
        
            <div class="cart-details">
              <h3>Cine seleccionado</h3>
              <p>Fecha y hora</p>
              <p>Mañana, (Día) de (Mes), Horario.</p>
              <p><strong>Asientos:</strong> Adulto (1 persona)</p>
              <p class="price">$50.00</p>
            </div>
        
            <div class="food-section">
              <h3>Alimentos</h3>
              <p>No has agregado alimentos a tu orden</p>
            </div>
        
            <div class="totals">
              <p>Subtotal: <span>$50.00</span></p>
              <p>Cargo por servicio: <span>$8.00</span></p>
              <p class="grand-total">Total: <span>$58.00</span></p>
            </div>
        
            <button class="pay-button">Pagar</button>
          </div>
    </main>

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
        <input class="show-cart-button" type="button" value="Proceder al pago">
    </footer>

    <script src="js/modal.js"></script>
</body>
</html>