<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>Tienda</title>
</head>
<body>
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
    <main class="login">
        <h1>Mi cuenta</h1>
        <div class="acceso">
            <h2>Acceder</h2>
            <form action="./Funciones/valida.php" method="post">
                <p>
                    <label for="idUser">Nombre de usuario *</label>
                    <input type="text" name="user" id="idUser">
                </p>
                <p>
                    <label for="idContraseña">Contraseña *</label>
                    <input type="password" name="contraseña" id="idContraseña">
                </p>
                <input type="submit" value="Acceder" name="enviar" class="boton">
                <a href="registro.php">Crear una cuenta</a>
            </form>
        </div>
    </main>
    <footer>
        <div class="politicas">
            <a href="">Politica de Cookies</a>
            <a href="">Politica de Privacidad</a>
        </div>
    </footer>
    <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        unset($_SESSION['error']);
    ?>
</body>
</html>