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
        require 'php_codes/functions.php';
        session_start();
    ?>
    
    <main>
        <div class="food">
            <h1 class="food-title">Seleccion de alimentos</h1>
            <div class="food-section">
                <h1>Combos</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Combo 1</h3>
                        <img src="food/combo2.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 2</h3>
                        <img src="food/combo3.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 3</h3>
                        <img src="food/combomediano.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 4</h3>
                        <img src="food/combocuates.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Combo 5</h3>
                        <img src="food/combo5.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                </div>
            </div>

            <div class="food-section">
                <h1>Palomitas</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Palomitas 1</h3>
                        <img src="food/palimitasmantequilla.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Palomitas 2</h3>
                        <img src="food/bolsa.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Palomitas 3</h3>
                        <img src="food/takis.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Palomitas 4</h3>
                        <img src="food/caramelo.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                </div>
            </div>

            <div class="food-section">
                <h1>Bebidas</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Bebida 1</h3>
                        <img src="food/fanta.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 2</h3>
                        <img src="food/pepsi.jpg " alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 3</h3>
                        <img src="food/cocacola.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 4</h3>
                        <img src="food/fantadefresa.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Bebida 5</h3>
                        <img src="food/sprite.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                </div>
            </div>

            <div class="food-section">
                <h1>Dulces</h1>
                <div class="food-menu">
                    <div class="food-option">
                        <h3>Dulce 1</h3>
                        <img src="food/chocolate.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Dulce 2</h3>
                        <img src="food/chocolate2.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                    <div class="food-option">
                        <h3>Dulce 3</h3>
                        <img src="food/chocolate3.jpg" alt="">
                        <button class="combo-btn"><b>Agregar</b></button>
                    </div>
                </div>
            </div>
        </div> 

        <div class="cart-container">
            <header class="cart-header">
              <h1>Tu carrito</h1>
              <?php
              $price = ($_SESSION['adult_tickets'] * 75) + ($_SESSION['children_tickets'] * 50);
              $_SESSION['subtotal'] = $price;
              $service = 8;
              $total_cart = $service + $_SESSION['subtotal'];
              echo '<span class="cart-total">$'.$total_cart.'.00</span>';
              ?>
            </header>
        
            <div class="cart-item">
                <?php
                echo '<img src="'.searchMovie()['poster_url'].'" alt="Angry Birds" class="movie-poster">';
                ?>
              
              
              <div class="movie-info">
                <h2><?php echo searchMovie()['titulo'] ?></h2>
                <p><strong>Clasificación:</strong> <?php echo searchMovie()['clasificacion'] ?></p>
                <p><strong>Duración:</strong> <?php echo searchMovie()['duracion'] ?> min</p>
              </div>
            </div>
            
            <div class="cart-details">
              <h3>Cine seleccionado</h3>
              <p>Fecha y hora</p>
              <?php cartDate();?>
              <?php
                echo '<p><strong>Asientos:</strong><br>Adulto ('.$_SESSION['adult_tickets'].')<br> Niños ('.$_SESSION['children_tickets'].')</p>';
                
                $price = ($_SESSION['adult_tickets'] * 75) + ($_SESSION['children_tickets'] * 50);
                
                echo '<p class="price">$'.$price.'.00</p>';
                
              ?>
            </div>
        
            <div class="food-section">
              <h3>Alimentos</h3>
              <p>No has agregado alimentos a tu orden</p>
            </div>
        
            <div class="totals">
            <?php
                echo '<p>Subtotal: <span>$'.$_SESSION['subtotal'].'.00</span></p>';
                $service = 8;
                $total_cart = $service + $_SESSION['subtotal'];
                echo '<p>Cargo por servicio: <span>$'.$service.'.00</span></p>';
                echo '<p class="grand-total">Total: <span>$'.$total_cart.'.00</span></p>';
            ?>
            </div>
            <form action="php_codes/goPay.php">
            <button class="pay-button">Siguiente</button>
            </form>
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
                    <label for="CocaCola">
                        <input type="checkbox" name="pequeñas" id="">
                        CocaCola
                    </label>
                    <label for="Sprite">
                        <input type="checkbox" name="medianas" id="">
                        Sprite
                    </label>
                    <label for="Agua Natural">
                        <input type="checkbox" name="Grandes" id="">
                        Agua natural
                    </label>
                    <label for="Fanta">
                        <input type="checkbox" name="Grandes" id="">
                        Fanta
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
        <a href="pay.php">
        <input class="show-cart-button" type="button" value="Proceder al pago">
        </a>
    </footer>

    <script src="js/modal.js"></script>
</body>
</html>