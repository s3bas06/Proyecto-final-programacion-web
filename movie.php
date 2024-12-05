<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de la pelicula</title>
    <link rel="stylesheet" href="styles/peliculastyle.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php
        require 'header.php';
        require 'php_codes/functions.php';
        getMovie();
    ?>
    <main>
        <div class="main-information">
            <?php
                getPoster();
            ?>
            
            <div class="movie-main-information">
                <?php
                    echo '<h1 class="movie-title">'.$_SESSION['movie'].'</h1>'
                ?>
                
                <button class="buy-button">Comprar boletos</button>
            </div>
        </div>

        <div class="movie-information">
            <div class="movie-sinopsis">
                <h1>Sinopsis</h1>
                <?php
                    getSinopsis();
                ?>
            </div>
    
            <div class="movie-characteristics">
                <div class="movie-classification-duration-genre">
                    <h1>Clasificación</h1>
                    <?php
                        getClassification();
                    ?>
                </div>
    
                <div class="movie-classification-duration-genre">
                    <h1>Duración</h1>
                    <?php
                        getDuration();
                    ?>
                </div>
    
                <div class="movie-classification-duration-genre">
                    <h1>Género</h1>
                    <?php
                        getGenre();
                    ?>
                </div>
            </div>
        </div>
    </main>

    <?php
        require 'footer.php';
    ?>
</body>
</html>