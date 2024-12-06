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
        <script>
             // Pasar la variable de PHP a JavaScript
             const maxSeatsAllowed = <?php echo $totalTicketsAllowed; ?>;
        </script>
        
    </main>

    <?php
        require 'footer.php';
    ?>

    <footer class="show-cart">
        <input type="button" value="Siguiente paso">
    </footer>
    <script src="js/seats.js"></script>
</body>
</html>