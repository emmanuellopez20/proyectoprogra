<?php
function ver_datos() {
    $conn = mysqli_connect('localhost', 'root', '', 'contact_db')or die('connection failed');

    $result = mysqli_query($conn, "SELECT * FROM `contact_form`");

    echo '<table class="table table-dark table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Nombre</th>';
    echo '<th>Email</th>';
    echo '<th>Asunto</th>';
    echo '<th>Mensaje</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['nombre'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['asunto'] . '</td>';
        echo '<td>' . $row['mensaje'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Datos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <?php ver_datos(); ?>
    </div>
</body>
</html>