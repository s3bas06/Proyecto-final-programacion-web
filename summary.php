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
              <p><?= $orderText ?></p>
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
            <form action="php_codes/goIndex.php">
            <button class="pay-button">Confirmar</button>
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