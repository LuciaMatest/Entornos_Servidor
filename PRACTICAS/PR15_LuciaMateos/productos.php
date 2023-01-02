<!DOCTYPE html>
<html lang="es">
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

    // try {
    //     $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
    //     $sql = 'select * from productos';
    //     $resultado=$conexion->query($sql);

    // } catch (Exception $ex) {
    //     if ($ex->getCode() == 2002) {
    //         echo '<span style="color:brown"> Fallo de conexión </span>';
    //     }
    //     if ($ex->getCode() == 1049) {
    //         $conexion2 = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
    //         $script = usarBBDD();
    //         $conexion2->query($script);        
    //     }
    //     if ($ex->getCode() == 1045) {
    //         echo '<span style="color:brown"> Datos incorrectos </span>';
    //     }
    // }
    ?>
    <header>
        <div class="logo">
            <img src="imagen/logo.png" alt="logo" class="icono_logo">
        </div>
        <div class="botones">
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
            <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
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
        
    </main>
    <footer>
        <div class="politicas">
            <a href="">Politica de Cookies</a>
            <a href="">Politica de Privacidad</a>
        </div>
    </footer>
</body>
</html>