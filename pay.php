<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de la pelicula</title>
    <link rel="stylesheet" href="styles/pay.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <?php
        require 'header.php';
    ?>
    
    <main>
        <div class="pay-section">
            <h1 class="pay-title">Detalles de la compra</h1>
            <form action="">
                <div class="pay-content">
                    <h2 >Datos personales</h2>
                    <br>
                    <div class="personal-data">
                        <input type="text" name="names" id="" placeholder="Nombre(s)">
                        <input type="text" name="lastname1" id="" placeholder="Apellido paterno">
                        <input type="text" name="lastname2" id="" placeholder="Apellido materno">
                    </div>
                    <h2>Método de pago</h2>
                    <br>
                    <div class="pay-method">
                        <input type="button" value="Tarjeta de crédito">
                        <input type="button" value="Kueski pay">
                        <input type="button" value="Click to pay">
                        <input type="button" value="Paypal">
                    </div>
                    <div class="do-pay">
                        <button class ="combo-btn">Realizar pago</button>
                    </div>
                </div>
            </form>
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
            <div class="modal-title"><h1>Detalles de la tarjeta</h1></div>
            <div class="food-details">
                <h2>Datos de la persona</h2>
                <div class="chexkbox-container">
                      <input type="text" name="names" id="" placeholder="Nombre(s)">
                      <input type="text" name="names" id="" placeholder="Apellido paterno">
                      <input type="text" name="names" id="" placeholder="Apellido materno">
                </div>
                
                <h2>Datos de la tarjeta</h2>
                <div class="chexkbox-container">
                    <input type="text" name="names" id="" placeholder="No. de tarjeta">
                    <input type="text" name="names" id="" placeholder="MM/AA">
                    <input type="text" name="names" id="" placeholder="CVV"> 
                </div>

            </div>

            <button class="confirm-button ">Confirmar</button>
            <p id="error-message" class="error-message" style="display: none;">Por favor, completa todos los campos.</p>
        </div>
        
    </section>
    <?php
        require 'footer_profile.php';
    ?>

    <script src="js/modal.js"></script>
    <script src="js/pay.js"></script>
    <script src="js/boton.js"></script>
    
</body>
</html>