<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine totalus</title>
    <link rel="stylesheet" href="styles/indexstyle.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https: //fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php
        session_start();
        require 'header.php';
    ?>

    <main>
        <div class="main-information">
            <div class="information">
                <div class="information-title"><h1>Lorem ipsum dolor sit amet.</h1></div>
                <div class="information-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum, ante vel efficitur vulputate. Sit ametdolor dolor ipsum amet</p></div>
                <div class="information-button"><button>Más información</button></div>
            </div>

            <div class="main-information-img">
                <img src="assets/main-imagen-index.png">
            </div>
        </div>

        <div class="display-option"></div>
    </main>

    <div class="cine-selection" id="movies">
        <label class="cine-title">Descubre tu cartelera en tu cine</label>
        <select name="cine-selector" id="cine-selector">
            <option value="cine1">Cine 1</option>
            <option value="cine2">Cine 2</option>
            <option value="cine3">Cine 3</option>
            <option value="cine4">Cine 4</option>
        </select>
    </div>

    <div class="movie-listings">
        <?php
            require 'php_codes/functions.php';
            getMoviesIndex();
        ?>
    </div>

    <?php
        require 'footer.php';
    ?>
</body>
</html>