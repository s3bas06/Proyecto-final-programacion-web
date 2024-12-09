<!DOCTYPE html>
<?php
    session_start();

    // Verificar si el usuario está logueado
    if (!isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit();
    }

    // Conectar a la base de datos
    require 'database.php';

    // Obtener la información del usuario de la base de datos
    $pdo = (new Database())->getConnection();
    $query = "SELECT * FROM usuarios WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':id', $_SESSION['usuario_id']);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "Usuario no encontrado.";
        exit();
    }

    // Obtener los puntos del usuario
    $points = $user['points'];
?>

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
                <form action="php_codes/logout.php">
                <button class ="btn-logout">Cerrar sesion</button>
                </form>
            </div>
        </div> 
        <div class="points">
            <div class="title">
                <p>Puntos totales:</p>
            </div>
            <div class="total-points">
                <p><?= $points ?></p>
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
        require 'footer_profile.php';
    ?>

</body>
</html>