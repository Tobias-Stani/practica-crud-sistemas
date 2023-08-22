<?php include("db.php")?>
<?php include("includes/header.php")?>
<?php include("save-task.php")?>

<div class="container p-4">

    <div class="row">

        <div class="col md-4">

        <!-- alerta de guardado -->

        <?php if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            unset($_SESSION['message']); // Eliminar la variable de sesión después de mostrar la alerta
        } ?>


        <!-- alerta de guardado -->

            <div class="card card-body">
                <form action="save-task.php" method="post">
                    <div class="form-groupp">
                        <input type="text" name="title" class="form-control" placeholder="titulo tarea" autofocus>
                    </div>
                    <div class="form-groupp">
                        <textarea name="description" rows="2" class="form-control mt-1" placeholder="descripcion"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block mt-1" name="save-task" value="guardar">
                </form>
            </div>

        </div>

<div class="col-md-8">

    <table class="table">

        <thead>
            <tr>
            <!-- <th scope="col">#</th> -->
            <th scope="col">Titulo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">creado</th>
            <th scope="col">acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
            <?php
                $query = "SELECT * FROM task ";
                $resultTask =  mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($resultTask)){ ?>

                    <tr>
                        <td> <?php echo $row['title'] ?> </td>
                        <td> <?php echo $row['description'] ?> </td>
                        <td> <?php echo $row['created_at'] ?> </td>
                        <td> 
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                                Editar
                            </a>
                            <a href="delete-task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>

                <?php } ?>
            </tr>


        </tbody>
    </table>

</div>

    </div>

</div>

<?php include("includes/footer.php")?>




    
    





