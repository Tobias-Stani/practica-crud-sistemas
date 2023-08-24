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
                        <input type="text" name="title" class="form-control" placeholder="Dependencia" autofocus>
                    </div>
                    <div class="form-groupp">
                        <textarea name="description" rows="2" class="form-control mt-1" placeholder="Problema"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block mt-1" name="save-task" value="guardar">
                </form>
            </div>

        </div>


        <!-- TABLA DE TAREAS -->
        
<div class="col-md-8">
    <div class="table-responsive">
        <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Dependencia</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">creado</th>
                            <th scope="col">acciones</th>
                        </tr>
                    </thead>
            <tbody>
                            <?php
                $query = "SELECT * FROM task ";
                $resultTask =  mysqli_query($conn, $query);
            
            while ($row = mysqli_fetch_array($resultTask)) {
                $taskDate = strtotime($row['created_at']);
                $yesterday = strtotime('-1 day');
                $today = strtotime('today');
                
                $rowColorClass = '';
                
                if ($taskDate > $today) {
                    $rowColorClass = 'table-warning'; // Amarillo para tareas nuevas
                } elseif ($taskDate < $yesterday) {
                    $rowColorClass = 'table-danger'; // Rojo para tareas viejas
                }
                
                ?>
                <tr class="<?php echo $rowColorClass; ?>">
                    <td> <?php echo $row['title'] ?> </td>
                    <td> <?php echo $row['description'] ?> </td>
                    <td> <?php echo $row['created_at'] ?> </td>
                    <td> 
                        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-dark">
                            Editar
                        </a>
                        <a href="delete-task.php?id=<?php echo $row['id']?>" class="btn btn-success">
                            Finalizado
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- TABLA DE TAREAS -->

</div>

</div>

<?php include("includes/footer.php")?>




    
    





