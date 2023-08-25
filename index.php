<?php include("db.php")?>
<?php include("includes/header.php")?>
<?php include("includes/navAbajoDelHeader.php")?>
<?php include("save-task.php")?>

<div class="container p-4">

<!-- TABLA DE TAREAS -->
        
<div class="col-md-12">
    <div class="table-responsive">
        <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Dependencia</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Direccion</th>
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
                    <td> <?php echo $row['direccion'] ?> </td>
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

<?php include("includes/footer.php")?>




    
    





