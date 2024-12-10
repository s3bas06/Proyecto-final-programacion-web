<?php
    require_once 'database.php';
    $db = new Database();
    $pdo = $db->getConnection();
    $query = "SELECT * FROM funciones WHERE id_pelicula = :id_pelicula AND fecha = :fecha";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':id_pelicula', $_SESSION['id_movie']);
    $stmt->bindValue(':fecha', $_SESSION['date_function']);
    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $query2 = "SELECT * FROM funciones WHERE id_pelicula = :id_pelicula";
    $stmt2 = $pdo->prepare($query2);
    $stmt2->bindValue(':id_pelicula', $_SESSION['id_movie']);
    $stmt2->execute();
    $row2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    $j=0;
    for ($i = 0; $i < 4; $i++) {
        $element = $row2[$i * 8];
        $fecha = $element['fecha'];
        $date = new DateTime($fecha);
        $dia = $date->format('d');
        $mes = $date->format('M');
    
        $dayValue = $fecha;
    
        // Verifica si la fecha seleccionada coincide con la fecha actual
        $isSelected = ($_SESSION['date_function'] == $dayValue) ? ' day_select' : '';  // Añadir la clase 'day_select' si la fecha es la seleccionada
    
        echo '
        <div class="day-function" id="interface">
            <div class="day' . $isSelected . '" id="day' . $i . '" onclick="submitDay(\'' . $dayValue . '\')">
                <p>' . $dia . ' ' . $mes . '</p>
            </div>
            
            <label>
                <input type="radio" name="option" id="schedule1">
                ' . $row[$j]['hora'] . '
            </label>
            <label>
                <input type="radio" name="option" id="schedule1">
                ' . $row[$j + 1]['hora'] . '
            </label>
        </div>
        ';
        $j += 2;
    }
    echo '<input type="hidden" name="selected_day" id="selected_day" value="2024-12-06">';
?>

<script>
function submitDay(day) {
    document.getElementById('selected_day').value = day;
    // Actualizar la clase de los días seleccionados (sin enviar el formulario)
    switch(day){
        case '2024-12-06':
            document.getElementById('day0').classList.add('day_select');
            document.getElementById('day1').classList.remove('day_select');
            document.getElementById('day2').classList.remove('day_select');
            document.getElementById('day3').classList.remove('day_select');
            break;
        case '2024-12-07':
            document.getElementById('day1').classList.add('day_select');
            document.getElementById('day0').classList.remove('day_select');
            document.getElementById('day2').classList.remove('day_select');
            document.getElementById('day3').classList.remove('day_select');
            break;
        case '2024-12-08':
            document.getElementById('day2').classList.add('day_select');
            document.getElementById('day1').classList.remove('day_select');
            document.getElementById('day0').classList.remove('day_select');
            document.getElementById('day3').classList.remove('day_select');
            break;
        case '2024-12-09':
            document.getElementById('day3').classList.add('day_select');
            document.getElementById('day1').classList.remove('day_select');
            document.getElementById('day2').classList.remove('day_select');
            document.getElementById('day0').classList.remove('day_select');
            break;
        default:
    }

    setTimeout(function() {
        document.forms[0].submit();
    }, 10);
}

</script>
