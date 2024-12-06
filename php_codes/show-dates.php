<?php
    require_once 'database.php';

    if (isset($_COOKIE['user_id'])) {
        // Obtener el valor de la cookie
        $userId = $_COOKIE['user_id'];
    
        // Asegúrate de que sea seguro para usar en una consulta
        $userId = $conn->real_escape_string($userId);
    
        // Crear la consulta
        $query = "SELECT username, email FROM usuarios WHERE id = '$userId'";
        $result = $conn->query($query);
    
        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            // Recorrer los resultados y mostrarlos
            while ($row = $result->fetch_assoc()) {
                echo "<p>Nombre: " . htmlspecialchars($row['username']) . "</p>";
                echo "<p>Correo: " . htmlspecialchars($row['email']) . "</p>";
            }
        } else {
            echo "<p>No se encontró el usuario.</p>";
        }
    } else {
        echo "<p>No se encontró la cookie de usuario.</p>";
    }
    
    // Cerrar la conexión
    $conn->close();
?>