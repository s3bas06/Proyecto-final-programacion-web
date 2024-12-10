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
        require 'php_codes/functions.php';
        session_start();
        $orderText = isset($_COOKIE['foodOrder']) ? $_COOKIE['foodOrder'] : 'No has agregado alimentos a tu orden';
        $orderText = isset($_COOKIE['foodOrder']) ? $_COOKIE['foodOrder'] : 'No has agregado alimentos a tu orden';
        $orderTotal = isset($_COOKIE['total']) ? $_COOKIE['total'] : '0';
        $orderSubtotal = isset($_COOKIE['subtotal']) ? $_COOKIE['subtotal'] : '0';
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
              <span class="cart-total"><?= $orderTotal ?></span>
            </header>
        
            <div class="food-section">
              <h3>Alimentos</h3>
              <p><?= $orderText ?></p>
            </div>
        
            <div class="totals">
                <p>Subtotal: <span id="subtotal"><?= $orderSubtotal ?></span></p>
                <p>Cargo por servicio: <span>$8.00</span></p>
                <p class="grand-total">Total: <span id="total"><?= $orderTotal ?></span></p>
            </div>
            <form action="php_codes/goIndex.php">
            <button class="pay-button">Siguiente</button>
            </form>    
        </div>
    </main>

    
    <?php
        require 'footer.php';
    ?>

  <footer class="show-cart">
        <a href="inicio.php">
        <input type="button" value="Fin">
        </a>
    </footer>
    

    <script src="js/modal.js"></script>
</body>
</html>