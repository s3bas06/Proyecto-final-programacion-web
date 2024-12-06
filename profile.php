<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https: //fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/profileStyle.css">
</head>
<body>
    
    <?php
        require 'header.php';
    ?>

    <div class="welcome">
            <p>Bienvenido (Usuario)</p>
    </div>
    <div class="information">
        <div class="container-menu">
            <div class="menu-options">
                <a href=""><p>Datos personales</p></a>
                <img src="assets/Line 1.png" alt="">
                <a href="poitns.php"><p>Puntos</p></a>     
                <a href="history.php"><p>Historial</p></a>
            </div>
        </div>  
       <div class="container-dates">
            <div class="dates">
                <p>Nombre(S):</p>
                <p>Sebastian Orantes Aguilar</p>             
            </div>
        <br>  
            <div class="dates">
                <p>Correo electronico:</p>
                <p>Example@gmal.com</p>             
            </div>
        <br>
            <div class="dates">
                <p>Contraseña:</p>
                <p class ="password" >***********</p>             
            </div>
       </div>     
    </div>
    <div class="return">
        <a href="inicio.php"><p>volver</p></a>
    </div>


    <br>
    
    <?php
        require 'footer_profile.php';
    ?>
    

    
</body>
</html>