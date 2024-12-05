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
            <div class="movie-poster"><img src="assets/movie-big-poster.png" alt=""></div>
            <div class="movie-main-information">
                <h1 class="movie-title">Inserte el titulo de una pelicula</h1>
                <button class="buy-button">Comprar boletos</button>
            </div>
        </div>

        <div class="movie-information">
            <div class="movie-sinopsis">
                <h1>Sinopsis</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae assumenda animi autem aut qui possimus praesentium similique laboriosam id, ad quos pariatur suscipit repellat vero itaque placeat at fuga?<br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic iure tempore ipsam nobis, magni a aspernatur id quod, rerum porro modi neque minima sunt voluptates qui nesciunt? Deleniti, dolorum vel. 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus molestias ullam, laboriosam tempora, omnis placeat odio perferendis, facere exercitationem laudantium recusandae harum a asperiores? Blanditiis facere ad ab eaque nemo.
                </p>
            </div>
    
            <div class="movie-characteristics">
                <div class="movie-classification-duration-genre">
                    <h1>Clasificación</h1>
                    <p>Lorem</p>
                </div>
    
                <div class="movie-classification-duration-genre">
                    <h1>Duración</h1>
                    <p>Lorem</p>
                </div>
    
                <div class="movie-classification-duration-genre">
                    <h1>Género</h1>
                    <p>Lorem</p>
                </div>
            </div>
        </div>
    </main>

    <?php
        require 'footer.php';
    ?>
</body>
</html>