<?php

// session_start();

include("db.php");

    if (isset($_POST['save-task'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $direccion = $_POST['direccion'];

        $query = "INSERT INTO task(title, description, direccion) VALUES ('$title', '$description', '$direccion')";

        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("query failes");
        }

        header("Location: index.php ");

        $_SESSION['message'] = 'tarea gaurdad';
        $_SESSION['message-type'] = 'success';


    }

?>