<?php
    
    // Iniciar la sesión
    session_start();
    
    if (isset($_SESSION['usuario_id'])) {
        $_SESSION = array();
    
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
    
        session_destroy();
        
        echo "Sesión borrada exitosamente.";
    } else {
        echo "No hay sesión activa.";
    }

    
    header('Location:..//inicio.php');
    
?>