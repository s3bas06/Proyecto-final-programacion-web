<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https: //fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/points.css">
</head>
<body>
    
    <?php
        require 'header.php';
    ?>

    <div class="information">
        <div class="container-menu">
            <div class="menu-options">
                <a href="profile.php"><p>Datos personales</p></a>
                <a href=""><p>Puntos</p></a>     
                <img src="assets/Line 1.png" alt="">
                <a href="history.php"><p>Historial</p></a>
            </div>
        </div> 
        <div class="points">
            <div class="title">
                <p>Puntos totales:</p>
            </div>
            <div class="total-points">
                <p>100 puntos</p>
            </div>
            <div class="description">
                <p>Por cada compra realizada que realiza, al gastar 5 pesos, usted acumula 1 punto en nuestro cine en el cual luego le dara beneficios para un futuro</p>
            </div>
        </div> 

    </div>
    <div class="return">
        <a href="inicio.php"><p>volver</p></a>
    </div>

    <?php
        require 'footer.php';
    ?>

</body>
</html>