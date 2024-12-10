<?php
    require_once 'database.php';

    $cineId = isset($_POST['cine_id']) ? intval($_POST['cine_id']) : 1;
    $db = new Database();
    $pdo = $db->getConnection();
    $query = "SELECT titulo, poster_url FROM peliculas WHERE cine = :cine_id";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':cine_id', $cineId);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Generar el HTML para las películas
    if ($stmt->rowCount()>0) {
        foreach ($rows as $row=>$element) {
            echo '<div class="movie-option">';
            echo '<a href="movie.php?title='.$element['titulo'].'">';
            echo '<img src="' . $element['poster_url'] . '" alt="' . $element['titulo'] . '">';
            echo '<p class="movie-title">' . $element['titulo'] . '</p>';
            echo '</a>';
            echo '</div>';
        }
    } else {
        echo '<p>No hay películas disponibles para este cine.</p>';
    }
?>
