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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="styles/profileStyle.css">
</head>
<body>
    <?php require 'header.php'; ?>

    <div class="welcome">
        <p>Bienvenido, <?php echo htmlspecialchars($user['username']); ?></p>
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
                <p>Nombre de usuario:</p>
                <p><?php echo htmlspecialchars($user['username']); ?></p>             
            </div>
            <br>  
            <div class="dates">
                <p>Correo electrónico:</p>
                <p><?php echo htmlspecialchars($user['email']); ?></p>             
            </div>
            <br>
            <div class="dates">
                <p>Contraseña:</p>
                <p class="password">***********</p>             
            </div>
        </div>     
    </div>
    <div class="return">
        <a href="inicio.php"><p>volver</p></a>
    </div>

    <?php require 'footer_profile.php'; ?>
</body>
</html>
