<?php
session_start();

// Verificar si los datos han sido enviados y asignarlos a la sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cine-selection'])) {
        $_SESSION['selected_cine'] = $_POST['cine-selection'];
    }

    if (isset($_POST['adult-tickets'])) {
        $_SESSION['adult_tickets'] = (int)$_POST['adult-tickets'];
    }

    if (isset($_POST['children-tickets'])) {
        $_SESSION['children_tickets'] = (int)$_POST['children-tickets'];
    }

    if((isset($_POST['children-tickets']) || isset($_POST['adult-tickets']))){
        header('Location:..//seats.php');
    } else {
        $day = $_POST['selected_day'];
        $_SESSION['date_function'] = $day;

        header('Cache-Control: no-cache, no-store, must-revalidate');
        header('Pragma: no-cache');
        header('Expires: 0');

        header('Location:..//schedule.php');
    }
    exit();
}
?>
