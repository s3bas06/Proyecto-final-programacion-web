<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de la pelicula</title>
    <link rel="stylesheet" href="styles/schedule.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php
        require 'header.php';
        session_start();
        require 'php_codes/functions.php';
    ?>
    
    <main>
        <div class="movie-poster-main">
            <?php
                echo '<h1 class="movie-name">'.$_SESSION['movie'].'</h1>';
                getPoster();
            ?>
            
        </div>

        <div class="main-content">
            <div class="main-sinopsis">
                <h2>Sinopsis</h2>
                <?php
                    getSinopsis();
                ?>
            </div>

            <form method="POST" action="php_codes/changeDate.php">
            <div class="main-function">
                <div class="selectors" id="interface">
                    <select name="adult-tickets" id="comboBox" class="ticket">
                        <option value="" disabled selected>Boletos adulto</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <select name="children-tickets" id="comboBox" class="ticket">
                        <option value="" disabled selected>Boletos niño</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
        <?php require 'php_codes/scheduleGenerator.php'; ?>
    </div>
    <div class="button">
        <button type="submit" class="confirm-button">Confirmar</button>
    </div>
    </form>
        
    </main>

    <?php
        require 'footer.php';
    ?>
    
</body>
</html>