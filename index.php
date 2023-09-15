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
                            <th scope="col">PARTIDOS</th>
                            <th scope="col">FECHA</th>
                            <th scope="col">RESULTADO</th>
                            <th scope="col">COMPETENCIA</th>
                            <th scope="col">LINK</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM partidos";
                        $resultTask = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($resultTask)) {
                            // Aquí dentro del bucle while, puedes acceder a los datos de cada fila
                            $rowColorClass = ''; // Puedes definir la clase CSS según tus necesidades

                            echo '<tr class="' . $rowColorClass . '">';
                            echo '<td>' . $row['partido'] . '</td>';
                            echo '<td>' . $row['resultado'] . '</td>';
                            echo '<td>' . $row['fecha'] . '</td>';
                            echo '<td>' . $row['competencia'] . '</td>';
                            echo '<td>' . $row['link'] . '</td>';
                            echo '<td>';
                            echo '<a href="edit.php?id=' . $row['id'] . '" class="btn btn-dark">Editar</a>';
                            // echo '<a href="delete-task.php?id=' . $row['id'] . '" class="btn btn-success">Finalizado</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
        </table>
    </div>
</div>
<!-- TABLA DE TAREAS -->

</div>

<?php include("includes/footer.php")?>




    
    





