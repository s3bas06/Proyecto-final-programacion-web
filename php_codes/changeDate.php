<?php
session_start(); // Asegúrate de que la sesión esté iniciada

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $day = $_POST['selected_day'];
    $_SESSION['date_function'] = $day;

    // Evitar cacheo
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');

    // Redirigir a schedule.php
    header('Location:..//schedule.php');
    exit(); // Asegúrate de salir después de redirigir
}
?>
