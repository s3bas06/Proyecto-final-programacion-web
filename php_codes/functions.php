<?php
    require 'database.php';
    session_start();
    function getMovie(){
        echo $_SESSION['usuario_id'];
        if (isset($_GET['title'])) {
            $_SESSION['movie'] = $_GET['title'];
        }
    }

    function getPoster(){
        $db = new Database();
        $pdo = $db->getConnection();
        $query = "SELECT * FROM peliculas WHERE titulo = :titulo";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':titulo', $_SESSION['movie']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        

    }

    function getMoviesIndex(){
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
                echo '<a href="movie.php?title='.$element['titulo'].'">';
                echo '<img src="' . $element['poster_url'] . '" alt="' . $element['titulo'] . '">';
                echo '<p class="movie-title">' . $element['titulo'] . '</p>';
                echo '</a>';
                echo '</div>';
            }
        }
    }
?>