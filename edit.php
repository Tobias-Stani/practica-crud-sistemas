<?php

    include("db.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $title = $row['title'];
            $description = $row ['description'];
        }
    }

    if (isset($_POST['update'])){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query =  "UPDATE task set title = '$title', description = '$description' where id = $id ";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'tarea editada correctamente';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php");

    }

?>

<?php include("includes/header.php") ?>

<div class="col-md-4 mx-auto my-5">
    <!-- 'mx-auto' centrará horizontalmente y 'my-5' agregará márgenes en la parte superior e inferior -->

    <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST" >
            <div class="form-group">
                <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" autofocus>
            </div>
            <div class="form-group">
                <textarea name="description" rows="2" class="form-control mt-1" placeholder="descripcion"><?php echo $description; ?></textarea>
            </div>
            <button class="btn btn-success mt-2" name="update">
                Actualizar
            </button>
        </form>
    </div>

</div>


<?php include("includes/footer.php") ?>
