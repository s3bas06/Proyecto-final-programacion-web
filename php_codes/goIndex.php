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
    $query = "SELECT * FROM usuarios WHERE id = :id"; // Cambiar UPDATE por SELECT
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':id', $_SESSION['usuario_id'], PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "Usuario no encontrado.";
        exit();
    }

    // Obtener los puntos actuales y sumar
    $points = $user['points']; // Asegurarte de que la columna se llame 'points'
    $pointsTotal = 1;
    $newPoints = $points + $pointsTotal;

    // Actualizar los puntos en la base de datos
    $query2 = "UPDATE usuarios SET points = :newPoints WHERE id = :id"; // Corregir columna 'points'
    $stmt2 = $pdo->prepare($query2);
    $stmt2->bindValue(':newPoints', $newPoints, PDO::PARAM_INT);
    $stmt2->bindValue(':id', $_SESSION['usuario_id'], PDO::PARAM_INT);
    $stmt2->execute();

    // Eliminar cookie y redirigir
    setcookie("foodOrder", "", time() - 3600, "/");
    header('Location: ../inicio.php');
    exit();
?>
