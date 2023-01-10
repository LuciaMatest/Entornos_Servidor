<?php
    require('Funciones/funcionesBD.php');
    require('Conexion/conexionBD.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Tienda</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="imagen/logo.png" alt="logo" class="icono_logo">
        </div>
        <div class="botones">
        <?php
            session_start();
            if (estaValidado()) {
                echo '<a href="Paginas/registro.php"><i class="fa-solid fa-pen-to-square"></i>Perfil</a>';
                echo '<a href="Paginas/carrito.php"><i class="fa-solid fa-cart-arrow-down"></i>Carrito</a>';
                echo '<a href="Paginas/logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>';
            } elseif (esAdmin() || esModerador()) {
                echo '<a href="#"><i class="fa-regular fa-folder-open"></i>Almacen</a>';
                echo '<a href="#"><i class="fa-solid fa-scale-unbalanced-flip"></i>Ventas</a>';
            } else {
        ?>
            <a href="Paginas/login.php"><i class="fa-solid fa-user"></i>Iniciar Sesión</a>
        <?php
            }
        ?>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Paginas/productos.php">Tienda</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Ofertas</a></li>
        </ul>
    </nav>
    <main>
        <div>
            <div class="rectangulo">
                <h2>Tu Tienda de Productos de  Belleza y Bienestar</h2>
            </div>
            <div class="imagenes">
                <img src="imagen/inicio.jpg" alt="img1" class="img1">
                <img src="imagen/inicio2.jpg" alt="img2" class="img2">
            </div>
        </div>
    </main>
    <footer>
        <div class="politicas">
            <a href="">Politica de Cookies</a>
            <a href="">Politica de Privacidad</a>
        </div>
    </footer>
</body>
</html>