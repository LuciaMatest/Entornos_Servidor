<!DOCTYPE html>
<html lang="es">
    <?php
        session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>Tienda</title>
</head>
<body>
    <?php
    require('Funciones/funcionesBD.php');
    require('Conexion/conexionBD.php');
    ?>
    <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        unset($_SESSION['error']);
    ?>
    <header>
        <div class="logo">
            <img src="imagen/logo.png" alt="logo" class="icono_logo">
        </div>
        <div class="botones">
            <i class="fa-solid fa-user"><a href=""></a></i>
            <i class="fa-solid fa-cart-arrow-down"><a href="#"></a></i>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="">Tienda</a></li>
            <li><a href="">Contacto</a></li>
            <li><a href="">Ofertas</a></li>
        </ul>
        <form class="barra">
            <input type="search" name="buscador" placeholder="Buscar" id="buscador">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </nav>
    <main>
        <h1>Mi cuenta</h1>
        <h3>Acceder</h3>
        <form action="./login.php" method="post">
            <label for="idNombre">Nombre de usuario o correo electrónico *</label>
            <input type="text" name="nombre" id="idNombre">
            <label for="idContraseña">Contraseña *</label>
            <input type="password" name="contraseña" id="idContraseña">
            <input type="submit" value="Acceder" name="acceder">
        </form>
        <h3>Registrarse</h3>
        <form action="./login.php" method="post">
            <label for="idNombre">Nombre de usuario o correo electrónico *</label>
            <input type="text" name="nombre" id="idNombre">
            <label for="idContraseña">Contraseña *</label>
            <input type="password" name="contraseña" id="idContraseña">
            <label for="idContraseña2">Repite la contraseña *</label>
            <input type="password" name="contraseña2" id="idContraseña2">
            <label for="idEmail">Email *</label>
            <input type="email" name="correo" id="idEmail">
            <label for="idFecha">Fecha de nacimiento *</label>
            <input type="date" name="fecha" id="idFecha">
            <input type="submit" value="Registrarse" name="registrar">
        </form>
    </main>
    <footer>
        <div class="politicas">
            <a href="">Politica de Cookies</a>
            <a href="">Politica de Privacidad</a>
        </div>
    </footer>
</body>
</html>