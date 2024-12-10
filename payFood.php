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
        require 'php_codes/functions.php';
        session_start();
        $orderText = isset($_COOKIE['foodOrder']) ? $_COOKIE['foodOrder'] : 'No has agregado alimentos a tu orden';
        $orderTotal = isset($_COOKIE['total']) ? $_COOKIE['total'] : '0';
        $orderSubtotal = isset($_COOKIE['subtotal']) ? $_COOKIE['subtotal'] : '0';
    ?>
    
    <main>
        <div class="pay-section">
            <h1 class="pay-title">Detalles de la compra</h1>
            <form action="">
                <div class="pay-content">
                    <h2 >Datos personales</h2>
                    <br>
                    <div class="personal-data">
                        <input type="text" name="first-name" placeholder="Nombre(s)" oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '')" />
                        <input type="text" name="last-name" placeholder="Apellido paterno" oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ]/g, '')" />
                        <input type="text" name="second-last-name" placeholder="Apellido materno" oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ]/g, '')" />
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
            <form action="php_codes/goSummaryFood.php">
            <button class="pay-button">Siguiente</button>
            </form>    
        </div>
    </main>

    <section class="modal">
        <div class="modal-container">
            <div class="modal-title"><h1>Detalles de la tarjeta</h1></div>
            <div class="food-details">
                <h2>Datos de la persona</h2>
                <div class="chexkbox-container">
                    <input type="text" name="first-name" placeholder="Nombre(s)" oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '')" />
                    <input type="text" name="last-name" placeholder="Apellido paterno" oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ]/g, '')" />
                    <input type="text" name="second-last-name" placeholder="Apellido materno" oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ]/g, '')" />
                </div>
                
                <h2>Datos de la tarjeta</h2>
                <div class="chexkbox-container">
                <input type="text" name="names" id="card-number" placeholder="No. de tarjeta" maxlength="19" oninput="formatCardNumber(this)" >
                <input type="text" name="expiry-date" id="expiry-date" placeholder="MM/AA" maxlength="5" oninput="formatExpiryDate(this)" >
                <input type="text" name="cvv" id="cvv" placeholder="CVV" maxlength="3" oninput="formatCVV(this)" >
                </div>

            </div>

            <button class="confirm-button ">Confirmar</button>
            <p id="error-message" class="error-message" style="display: none;">Por favor, completa todos los campos.</p>
        </div>
        
    </section>
    <?php
        require 'footer.php';
    ?>

    <footer class="show-cart">
        <a href="summaryFood.php">
        <input type="button" value="Siguiente">
        </a>
    </footer>

    <script>
 
</script>

    <script src="js/modal.js"></script>
    <script src="js/pay.js"></script>
    <script src="js/boton.js"></script>
    
</body>
</html>