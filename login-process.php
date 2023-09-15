<?php
session_start(); // Iniciar la sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    // Conectar a la base de datos y realizar la consulta
    include("db.php"); // Asegúrate de tener las configuraciones de conexión en db.php

    $query = "SELECT * FROM login WHERE nombre = '$usuario'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($clave === $row['clave']) { // Comparar contraseñas sin formato hash
            // Las credenciales son válidas, iniciar sesión
            $_SESSION['usuario_id'] = $row['id']; // Guardar información del usuario en la sesión
            header("Location: index.php"); // Redirigir a la página principal
            exit();
        } else {
            $error_message = "Datos incorrectos";
        }
    } else {
        $error_message = "Datos incorrectos";
    }
}
?>

<!-- Luego, en el mismo archivo (login-process.php), puedes mostrar los errores en el formulario -->
<?php include("includes/header.php") ?>

<!-- <div class="d-flex justify-content-center align-items-center"> -->
    <div class="card border-dark m-5 p-5"> 
        <div class="text-center card-header">LOGIN</div>
        <div class="m-3">
            <form class="" method="post">
                <?php if(isset($error_message)) echo "<p class='text-danger'>$error_message</p>"; ?>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" autofocus>
                </div>
                <div class="mb-3">
                    <label for="clave" class="form-label">Clave</label>
                    <input type="password" class="form-control" id="clave" name="clave">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </form>
        </div>
    </div>
<!-- </div> -->

<?php include("includes/footer.php") ?>

