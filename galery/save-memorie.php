<?php include('../includes/header.php') ?>
<?php include('../db.php') ?>

<div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-md-6">
            <form action="save-process.php" method="post" enctype="multipart/form-data">
                <div class="form-group m-3">
                    <input type="text" class="form-control" name="title" placeholder="Título del recuerdo">
                </div>
                <div class="form-group m-3">
                    <input type="text" class="form-control" name="description" placeholder="Descripción">
                </div>
                <div class="form-group m-3">
                    <label for="imagen">Imagen:</label>
                    <input type="file" REQUIRED class="form-control-file" name="imagen" id="imagen">
                </div>
                <div class="form-group m-3">
                    <input type="submit" class="btn btn-primary" value="Aceptar">
                </div>
            </form>
        </div>
    </div>
</div>



<?php include('../includes/footer.php') ?>