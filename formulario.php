<?php include('includes/header.php')?>
<?php include('includes/navAbajoDelHeader.php')?>

<div class="col md-4 m-5 p-5">

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
                <input type="text" name="partido" class="form-control m-3 p-2" placeholder="partido" autofocus>
            </div>
            <div class="form-groupp">
                <input type="text" name="resultadao" class="form-control m-3 p-2" placeholder="resultado" autofocus>
            </div>
            <div class="form-groupp">
                <input type="date" name="fecha" rows="2" class="form-control m-3 p-2" placeholder="fecha"></input>
            </div>
            <div class="form-groupp">
                <input type="text" name="competencia" class="form-control m-3 p-2" placeholder="competencia" autofocus>
            </div>
            <div class="form-groupp">
                <input type="text" name="link" class="form-control m-3 p-2" placeholder="link" autofocus>
            </div>
            <input type="submit" class="btn btn-success btn-block mt-1" name="save-task" value="guardar">
        </form>
    </div>

</div>

<?php include('includes/footer.php')?>
