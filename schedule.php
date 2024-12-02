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
    ?>
    
    <main>
        <div class="movie-poster">
            <h1 class="movie-name">Nombre de la pelicula</h1>
            <img src="assets/movie-big-poster.png" alt="">
        </div>

        <div class="main-content">
            <div class="main-sinopsis">
                <h2>Sinopsis</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta tempora quis expedita. Nostrum unde, quas, sed fugit illum nemo reprehenderit optio, cupiditate tempore nihil saepe fugiat assumenda vero natus aliquam? 
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo, ad doloribus? Eum dolore, quisquam facilis rem sapiente, dolorem nostrum impedit odio, repellendus alias suscipit labore praesentium asperiores consectetur. Totam, illo. 
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum nisi atque, cum consequuntur doloremque odio molestiae iusto dolores harum nam vel quo impedit sint consequatur ea nulla reprehenderit, deleniti at. 
                </p>                
            </div>

            <div class="main-function">
                <div class="selectors" id="interface">
                    <select name="cine-selection" id="comboBox" class="first-combobox">
                        <option value="cine1">Cine 1</option>
                        <option value="cine2">Cine 2</option>
                        <option value="cine3">Cine 3</option>
                        <option value="cine4">Cine 4</option>
                    </select>
                    <select name="ticket" id="comboBox" class="ticket">
                        <option value="adult1">1</option>
                        <option value="adult2">2</option>
                        <option value="adult3">3</option>
                        <option value="adult4">4</option>
                    </select>
                    <select name="ticket" id="comboBox" class="ticket">
                        <option value="children1">1</option>
                        <option value="children2">2</option>
                        <option value="children3">3</option>
                        <option value="children4">4</option>
                    </select>
                </div>
                
                <div class="day-function" id="interface">
                    <div class="day">
                        <p>12 SEP</p>
                    </div>
                    <label>
                        <input type="radio" name="option" id="schedule1">
                        10:30
                    </label>

                    <label>
                        <input type="radio" name="option" id="schedule1">
                        11:30
                    </label>
                </div>

                <div class="day-function" id="interface">
                    <div class="day">
                        <p>13 SEP</p>
                    </div>
                    <label>
                        <input type="radio" name="option" id="schedule1">
                        10:30
                    </label>

                    <label>
                        <input type="radio" name="option" id="schedule1">
                        11:30
                    </label>
                </div>

                <div class="day-function" id="interface">
                    <div class="day">
                        <p>14 SEP</p>
                    </div>
                    <label>
                        <input type="radio" name="option" id="schedule1">
                        10:30
                    </label>

                    <label>
                        <input type="radio" name="option" id="schedule1">
                        11:30
                    </label>
                </div>

                <div class="day-function" id="interface">
                    <div class="day">
                        <p>15 SEP</p>
                    </div>
                    <label>
                        <input type="radio" name="option" id="schedule1">
                        10:30
                    </label>

                    <label>
                        <input type="radio" name="option" id="schedule1">
                        11:30
                    </label>
                </div>
            </div>

            <div class="button">
                <button class="confirm-button">Confirmar</button>
            </div>
        </div>


    </main>

    <?php
        require 'footer.php';
    ?>
    
</body>
</html>