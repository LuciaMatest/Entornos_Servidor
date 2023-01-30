<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="webroot/css/estilo.css">
    <title>Peluqueria</title>
</head>

<body>
    <header class="p-3 text-bg-gray">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <img src="webroot/img/logo.png" alt="logo">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-black">Inicio</a></li>
                    <li><a href="#" class="nav-link px-2 text-black">Tienda</a></li>
                    <?php
                    if (esAdmin() || esModerador()) {
                        echo '<li><a href="#" class="nav-link px-2 text-black">Almacén</a></li>';
                        echo '<li><a href="#" class="nav-link px-2 text-black">Albarán</a></li>';
                        echo '<li><a href="#" class="nav-link px-2 text-black">Ventas</a></li>';
                    }
                    ?>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
        </div>
    </header>
</body>

</html>