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

    // Redirigir a la página de selección de asientose
    header('Location:..//seats.php');
    exit();
}
?>
