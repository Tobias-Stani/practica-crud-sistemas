<?php

    include("db.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM partidos WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $partido = $row['partido'];
            $fecha = $row ['fecha'];
            $resultado = $row ['resultado'];
            $link = $row ['link'];
            $competencia = $row ['competencia'];
        }
    }

    if (isset($_POST['update'])){
        $id = $_GET['id'];
        $partido = $row['partido'];
        $fecha = $row ['fecha'];
        $link = $row ['link'];
        $competencia = $row ['competencia'];

        $query = "UPDATE partidos SET partido = '$partido', fecha = '$fecha', link = '$link', competencia = '$competencia' WHERE id = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'tarea editada correctamente';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php");

    }

?>

<?php include("includes/header.php") ?>
<?php include("includes/navAbajoDelHeader.php") ?>

<div class="col-md-4 mx-auto my-5">
    <!-- 'mx-auto' centrará horizontalmente y 'my-5' agregará márgenes en la parte superior e inferior -->

    <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST" >
            <div class="form-group m-3">
                <input type="text" name="partido" class="form-control" value="<?php echo $partido; ?>" placeholder="Partido" autofocus>
            </div>
            <div class="form-group m-3">
                <input type="date" name="fecha" class="form-control" value="<?php echo $fecha; ?>" placeholder="Fecha">
            </div>
            <div class="form-group m-3">
                <input type="text" name="link" class="form-control" value="<?php echo $link; ?>" placeholder="Link">
            </div>
            <div class="form-group m-3">
                <input type="text" name="competencia" class="form-control" value="<?php echo $competencia; ?>" placeholder="Competencia">
            </div>
            <button class="btn btn-success mt-3" name="update">
                Actualizar
            </button>
        </form>
    </div>
</div>


<?php include("includes/footer.php") ?>
