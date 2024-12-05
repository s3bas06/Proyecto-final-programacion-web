<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de compra</title>
    <link rel="stylesheet" href="styles/summary.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <?php
        require 'header.php';
    ?>
    
    <main>

        <div class="main-panel">
            <h1>¡Muchas gracias por su compra!</h1>
            <div class="main-content">
              <img src="assets/qr.png" alt="qr">
            </div>
              <p>Escanee este codigo QR para validar sus boletos</p>
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

    
    <?php
        require 'footer.php';
    ?>

    <footer class="show-cart">
        <input class="show-cart-button" type="button" value="Proceder al pago">
    </footer>
    

    <script src="js/modal.js"></script>
</body>
</html>