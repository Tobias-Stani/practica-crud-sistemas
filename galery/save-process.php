<?php include('../includes/header.php') ?>
<?php include('../db.php') ?>

<?php 

    $title = $_POST['title'];
    $description = $_POST['description'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "INSERT INTO memories (title, description, image) VALUES ('$title', '$description', '$imagen')";

    $result = mysqli_query($conn, $query); 


?>


<?php include('../includes/footer.php') ?>