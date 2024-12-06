<?php
session_start();
if (isset($_SESSION['adult_tickets']) && isset($_SESSION['children_tickets'])) {
    $adultTickets = $_SESSION['adult_tickets'];
    $childrenTickets = $_SESSION['children_tickets'];
    $totalTicketsAllowed = $adultTickets + $childrenTickets;
} else {
    $totalTicketsAllowed = 0; // O un valor predeterminado si no hay asientos en la sesión
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de la pelicula</title>
    <link rel="stylesheet" href="styles/seats.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php
        require 'header.php';
        require 'php_codes/functions.php';
    ?>
    
    <main>
        <div class="seats-section">
            <h1 class="seats-title">Selección de asientos</h1>
            <div class="cinema">
                <div class="screen">Screen</div>
                <div class="row">
                    <div class="row-name">A</div>
                    <button class="seat">1</button>
                    <button class="seat">2</button>
                    <button class="seat">3</button>
                    <button class="seat">4</button>
                    <button class="seat reserved">5</button>
                    <button class="seat">5</button>
                    <button class="seat">6</button>
                    <button class="seat">7</button>
                    <button class="seat">8</button>
                    <button class="seat">9</button>
                    <button class="seat">10</button>
                    <button class="seat">11</button>
                    <button class="seat reserved">12</button>
                    <button class="seat">13</button>
                </div>
                <div class="row">
                    <div class="row-name">B</div>
                    <button class="seat">1</button>
                    <button class="seat">2</button>
                    <button class="seat">3</button>
                    <button class="seat">4</button>
                    <button class="seat">5</button>
                    <button class="seat reserved">5</button>
                    <button class="seat reserved">6</button>
                    <button class="seat reserved">7</button>
                    <button class="seat">8</button>
                    <button class="seat">9</button>
                    <button class="seat">10</button>
                    <button class="seat">11</button>
                </div>
                <div class="row">
                    <div class="row-name">C</div>
                    <button class="seat">1</button>
                    <button class="seat">2</button>
                    <button class="seat reserved">3</button>
                    <button class="seat reserved">4</button>
                    <button class="seat">5</button>
                    <button class="seat">5</button>
                    <button class="seat">6</button>
                    <button class="seat">7</button>
                    <button class="seat">8</button>
                    <button class="seat reserved">9</button>
                    <button class="seat reserved">10</button>
                    <button class="seat">11</button>
                </div>
                <div class="row">
                    <div class="row-name">D</div>
                    <button class="seat">1</button>
                    <button class="seat">2</button>
                    <button class="seat">3</button>
                    <button class="seat reserved">4</button>
                    <button class="seat reserved">5</button>
                    <button class="seat reserved">5</button>
                    <button class="seat reserved">6</button>
                    <button class="seat">7</button>
                    <button class="seat">8</button>
                    <button class="seat reserved">9</button>
                    <button class="seat">10</button>
                    <button class="seat">11</button>
                </div>
                <div class="row">
                    <div class="row-name">E</div>
                    <button class="seat reserved">1</button>
                    <button class="seat">2</button>
                    <button class="seat">3</button>
                    <button class="seat">4</button>
                    <button class="seat">5</button>
                    <button class="seat reserved">5</button>
                    <button class="seat reserved">6</button>
                    <button class="seat">7</button>
                    <button class="seat">8</button>
                    <button class="seat reserved">9</button>
                    <button class="seat">10</button>
                    <button class="seat">11</button>
                </div>
                <div class="row">
                    <div class="row-name">F</div>
                    <button class="seat">1</button>
                    <button class="seat">2</button>
                    <button class="seat reserved">3</button>
                    <button class="seat reserved">4</button>
                    <button class="seat">5</button>
                    <button class="seat reserved">5</button>
                    <button class="seat reserved">6</button>
                    <button class="seat reserved">7</button>
                    <button class="seat">8</button>
                    <button class="seat">9</button>
                    <button class="seat">10</button>
                    <button class="seat">11</button>
                </div>
                <div class="row">
                    <div class="row-name">G</div>
                    <button class="seat">1</button>
                    <button class="seat">2</button>
                    <button class="seat">3</button>
                    <button class="seat">4</button>
                    <button class="seat">5</button>
                    <button class="seat">5</button>
                    <button class="seat reserved">6</button>
                    <button class="seat reserved">7</button>
                    <button class="seat">8</button>
                    <button class="seat">9</button>
                    <button class="seat">10</button>
                    <button class="seat">11</button>
                </div>
                <div class="row">
                    <div class="row-name">H</div>
                    <button class="seat">1</button>
                    <button class="seat">2</button>
                    <button class="seat reserved">3</button>
                    <button class="seat reserved">4</button>
                    <button class="seat reserved">5</button>
                    <button class="seat">5</button>
                    <button class="seat reserved">6</button>
                    <button class="seat reserved">7</button>
                    <button class="seat reserved">8</button>
                    <button class="seat reserved">9</button>
                    <button class="seat reserved">10</button>
                    <button class="seat">11</button>
                    <button class="seat">12</button>
                </div>
                <div class="row">
                    <div class="row-name">I</div>
                    <button class="seat">1</button>
                    <button class="seat">2</button>
                    <button class="seat">3</button>
                    <button class="seat reserved">4</button>
                    <button class="seat">5</button>
                    <button class="seat">5</button>
                    <button class="seat reserved">6</button>
                    <button class="seat reserved">7</button>
                    <button class="seat">8</button>
                    <button class="seat">9</button>
                    <button class="seat reserved">10</button>
                    <button class="seat reserved">11</button>
                    <button class="seat">12</button>
                    <button class="seat">13</button>
                </div>
                <div class="row">
                    <div class="row-name">J</div>
                    <button class="seat reserved">1</button>
                    <button class="seat reserved">2</button>
                    <button class="seat reserved">3</button>
                    <button class="seat reserved">4</button>
                    <button class="seat">5</button>
                    <button class="seat reserved">5</button>
                    <button class="seat reserved">6</button>
                    <button class="seat">7</button>
                    <button class="seat">8</button>
                    <button class="seat reserved">9</button>
                    <button class="seat reserved">10</button>
                    <button class="seat reserved">11</button>
                    <button class="seat reserved">12</button>
                    <button class="seat reserved">13</button>
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
        
            <button class="pay-button">Pagar</button>
        </div>
        <script>
             const maxSeatsAllowed = <?php echo $totalTicketsAllowed; ?>;
        </script>
        
    </main>

    <?php
        require 'footer.php';
    ?>
    <footer class="show-cart">
        <input type="button" value="Siguiente paso">
    </footer>
    <div id="session-config" data-max-seats="<?php echo htmlspecialchars($totalTicketsAllowed); ?>"></div>
    <script src="js/seats.js"></script>
</body>
</html>