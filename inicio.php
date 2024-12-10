<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine totalus</title>
    <link rel="stylesheet" href="styles/indexstyle.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https: //fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php
        session_start();
        require 'header.php';
    ?>

    <main>
        <div class="main-information">
            <div class="information">
                <div class="information-title"><h1>La sociedad de la nieve</h1></div>
                <div class="information-body"><p>Inspirada en la historia real del accidente aéreo del vuelo 571 de la Fuerza Aérea Uruguaya en los Andes en 1972</p></div>
                <div class="information-button"><button>Más información</button></div>
            </div>

            <div class="main-information-img">
                <img src="assets/sociedaddelanieve-poster.jpg">
            </div>
        </div>

        <div class="display-option"></div>
    </main>
    
    <div class="cine-selection" id="movies">
        <label class="cine-title">Descubre tu cartelera en tu cine</label>
            <select name="cine-selector" id="cine-selector">
                <option value="1">Cine 1</option>
                <option value="2">Cine 2</option>
                <option value="3">Cine 3</option>
                <option value="4">Cine 4</option>
            </select>
    </div>

    <div class="movie-listings" id="movie-listings">

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cineSelector = document.getElementById("cine-selector");
            const movieListings = document.querySelector(".movie-listings");

            // Función para cargar las películas de un cine específico
            function loadMovies(cineId) {
                fetch("php_codes/get_movies.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "cine_id=" + cineId,
                })
                    .then((response) => response.text())
                    .then((data) => {
                        movieListings.innerHTML = data; // Mostrar las películas
                    })
                    .catch((error) => console.error("Error al cargar las películas:", error));
            }

            // Cargar las películas del cine 1 al inicio
            loadMovies(1);

            // Cambiar las películas cuando el usuario seleccione otro cine
            cineSelector.addEventListener("change", function () {
                loadMovies(this.value);
            });
        });
    </script>

    <?php
        require 'footer.php';
    ?> 
</body>
</html>