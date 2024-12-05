<?php
    session_start();
    require_once('database.php');

    $db = new Database();
    $pdo = $db->getConnection();
    $query = "SELECT titulo, poster_url FROM peliculas";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if($stmt->rowCount()>0){
        foreach($rows as $row => $element){
            echo '<div class="movie-option">';
            echo '<a href="movie.php">';
            echo '<img src="' . $element['poster_url'] . '" alt="' . $element['titulo'] . '">';
            echo '<p class="movie-title">' . $element['titulo'] . '</p>';
            echo '</a>';
            echo '</div>';
        }
    }
?>