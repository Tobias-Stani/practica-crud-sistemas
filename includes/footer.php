<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Footer en la parte inferior</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Al menos 100% de la altura de la ventana visible */
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
        }

        .content {
            flex: 1; /* El contenido se expandirá para llenar el espacio restante */
        }
    </style>
</head>
<body>

<div class="content">
    <!-- Aquí va tu contenido principal -->
</div>

<footer class="bg-success text-center text-white p-3">
    <!-- Copyright -->
    © 2023 
    <a class="text-white" href="https://mdbootstrap.com/">direccion general de sistemas</a>
</footer>

<!-- animaciones scroll -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- animaciones scroll -->

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- bootstrap -->

</body>
</html>
