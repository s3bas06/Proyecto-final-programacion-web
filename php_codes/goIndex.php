<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario_id'])) {
    // Eliminar cookie y redirigir
    setcookie("foodOrder", "", time() - 3600, "/");
    header('Location: ../inicio.php');
    exit();
}

// Conectar a la base de datos
require 'database.php';

try {
    $pdo = (new Database())->getConnection();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener la información del usuario
    $query = "SELECT * FROM usuarios WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':id', $_SESSION['usuario_id'], PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        die('Usuario no encontrado.');
    }

    // Obtener y actualizar los puntos
    $points = $user['points'];
    $pointsTotal = 1;
    $newPoints = $points + $pointsTotal;

    $query2 = "UPDATE usuarios SET points = :newPoints WHERE id = :id";
    $stmt2 = $pdo->prepare($query2);
    $stmt2->bindValue(':newPoints', $newPoints, PDO::PARAM_INT);
    $stmt2->bindValue(':id', $_SESSION['usuario_id'], PDO::PARAM_INT);
    $stmt2->execute();

    if ($stmt2->rowCount() === 0) {
        die('No se actualizó ningún registro.');
    }

    echo "Puntos actualizados correctamente.";
} catch (PDOException $e) {
    die('Error en la base de datos: ' . $e->getMessage());
}

// Eliminar cookie y redirigir
setcookie("foodOrder", "", time() - 3600, "/");
header('Location: ../inicio.php');
exit();
?>
