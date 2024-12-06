<?php
    require_once 'database.php';
    function getMovie(){
        session_start();
        if (isset($_GET['title'])) {
            $_SESSION['movie'] = $_GET['title'];
            $row = searchMovie();
            $_SESSION['id_movie'] = $row['id'];
            $_SESSION['date_function'] = '2024-12-06';
        }
    }
    function searchMovie(){
        $db = new Database();
        $pdo = $db->getConnection();
        $query = "SELECT * FROM peliculas WHERE titulo = :titulo";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':titulo', $_SESSION['movie']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    function getPoster(){
        $row = searchMovie();

        echo '<div class="movie-poster"><img src="'.$row['poster_url'].'" alt=""></div>';
    }
    function getSinopsis(){
        $row = searchMovie();

        echo '<p>'.$row['sinopsis'].'</p>';
    }

    function getClassification(){
        $row = searchMovie();

        echo '<p>'.$row['clasificacion'].'</p>';
    }

    function getGenre(){
        $row = searchMovie();

        echo '<p>'.$row['genero'].'</p>';
    }

    function getDuration(){
        $row = searchMovie();

        echo '<p>'.$row['duracion'].'</p>';
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

    function cartDate(){
        $date = new DateTime($_SESSION['date_function']);
        $dia = $date->format('d');
        $mes = $date->format('M');

        echo '<p>'.$dia.' de '.$mes.', Horario.</p>';
    }
?>