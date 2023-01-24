<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="webroot/css/estilo.css">
    <title>Tienda</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="webroot/img/logo.png" alt="logo" class="icono_logo">
        </div>
        <div class="botones">
        <?php
            if (estaValidado()) {
                echo '<i class="fa-solid fa-cart-arrow-down"></i><input class="boton" type="submit" name="carrito" value="Carrito">&nbsp;';
                echo '<i class="fa-solid fa-pen-to-square"></i><input class="boton" type="submit" name="perfil" value="Perfil">&nbsp;';
                echo '<i class="fa-solid fa-right-from-bracket"></i><input class="boton" type="submit" name="logout" value="Cerrar sesión">';
            } else {
        ?>
            <i class="fa-solid fa-user"></i><input class="boton" type="submit" name="login" value="Iniciar Sesión">
        <?php
            }
        ?>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Tienda</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Ofertas</a></li>
            <?php
            if (esAdmin() || esModerador()) {
                echo '<li><a href="#">Almacén</a></li>';
                echo '<li><a href="#">Albarán</a></li>';
                echo '<li><a href="#">Ventas</a></li>';
            }
            ?>
        </ul>
    </nav>
    <main class="principal">
        <div>
            <div class="rectangulo">
                <h2>Tu Tienda de Productos de  Belleza y Bienestar</h2>
            </div>
            <div class="imagenes">
                <img src="webroot/img/inicio.jpg" alt="img1" class="img1">
                <img src="webroot/img/inicio2.jpg" alt="img2" class="img2">
            </div>
        </div>
        
    </main>
    <footer>
        <div class="politicas">
            <a href="#">Politica de Cookies</a>
            <a href="#">Politica de Privacidad</a>
        </div>
    </footer>
</body>
</html>