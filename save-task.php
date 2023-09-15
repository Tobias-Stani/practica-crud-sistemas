<?php

// session_start();

include("db.php");

if (isset($_POST['save-task'])) {

    $partido = $_POST['partido'];
    $fecha = $_POST['fecha'];
    $resultado = $_POST['resultado'];
    $link = $_POST['link'];
    $competencia = $_POST['competencia'];

    $query = "INSERT INTO partidos (partido, fecha, resultado, link, competencia) VALUES ('$partido', '$fecha', '$resultado', '$link', '$competencia')";

    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        die("La consulta ha fallado");
    }

    header("Location: index.php");
    
    $_SESSION['message'] = 'Partido guardado';
    $_SESSION['message-type'] = 'success';
}



?>