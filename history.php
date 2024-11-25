<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https: //fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/history.css">
    <title>Document</title>
</head>
<body>
    
    <?php
        require 'header.php';
    ?>

    <div class="title">
        <p>Ultimas peliculas vistas</p>
    </div>
    <div class="information">
        <div class="container-menu">
            <div class="menu-options">
                <a href="profile.html"><p>Datos personales</p></a>
                <a href="poitns.html"><p>Puntos</p></a>     
                <a href=""><p>Historial</p></a>
                <img src="assets/Line 1.png" alt="">
            </div>
        </div> 
        <div class="movies">
            <div class="poster">
                <img src="assets/movie-poster.png" alt="">
            </div>
            <div class="poster">
                <img src="assets/movie-poster.png" alt="">
            </div>
            <div class="poster">
                <img src="assets/movie-poster.png" alt="">
            </div>
            
        </div>
    </div>
    <div class="return">
        <a href="index.html"><p>volver</p></a>
    </div>

    <?php
        require 'footer.php';
    ?>

</body>
</html>