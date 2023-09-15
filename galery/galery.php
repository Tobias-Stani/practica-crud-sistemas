<?php include('../includes/header.php') ?>
<?php include('../includes/navAbajoDelHeader.php') ?>

<?php
include("../db.php"); // Asegúrate de incluir tu archivo de conexión a la base de datos

$query = "SELECT * FROM memories";
$result = mysqli_query($conn, $query);

if ($result) {
    echo '<div class="container-fluid">';
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $description = $row['description'];
        $image = base64_encode($row['image']); // Codifica la imagen en base64

        // Genera la tarjeta con los datos de cada memoria
        echo '<div class="row justify-content-center align-items-center m-5">';
        echo '    <div class="col-md-6">';
        echo '        <div class="card shadow" style="width: 18rem;">';
        echo '            <img class="card-img-top" src="data:image/jpeg;base64,' . $image . '" alt="Card image cap">';
        echo '            <div class="card-body">';
        echo '                <h5 class="card-title">' . $title . '</h5>';
        echo '                <p class="card-text">' . $description . '</p>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Error al recuperar datos de la base de datos: " . mysqli_error($conn);
}
?>




<?php include('../includes/footer.php') ?>