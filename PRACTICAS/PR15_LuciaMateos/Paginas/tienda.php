<?php
    require('../Funciones/funcionesBD.php');
    require('../Conexion/conexionBD.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Tienda</title>
</head>
<body>
    <?php
        $opcion=false;
        try {
            $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
            $sql = 'select * from productos';
            $resultado=$conexion->query($sql);
            $array_productos=array();
            while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                array_push($array_productos,$row);
            }

        } catch (Exception $ex) {
            if ($ex->getCode() == 2002) {
                echo '<span style="color:brown"> Fallo de conexión </span>';
            }
            if ($ex->getCode() == 1049) {
                $opcion=true;
                $conexion2 = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                $script = usarBBDD();
                $conexion2->exec($script);        
            }
            if ($ex->getCode() == 1045) {
                echo '<span style="color:brown"> Datos incorrectos </span>';
            }
        }
    ?>
    <?
        if ($opcion) {
            try {
                $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                $sql = 'select * from productos';
                $resultado=$conexion->query($sql);
                $array_productos=array();
                while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    array_push($array_productos,$row);
                }
    
            } catch (Exception $ex) {
                if ($ex->getCode() == 2002) {
                    echo '<span style="color:brown"> Fallo de conexión </span>';
                }
                if ($ex->getCode() == 1049) {
                    echo '<span style="color:brown"> Base de datos desconocida </span>';       
                }
                if ($ex->getCode() == 1045) {
                    echo '<span style="color:brown"> Datos incorrectos </span>';
                }
            }
        }
    ?>
    <header>
        <div class="logo">
            <img src="../imagen/logo.png" alt="logo" class="icono_logo">
        </div>
        <div class="botones">
        <?php
            session_start();
            if (estaValidado()) {
                echo '<a href="carrito.php"><i class="fa-solid fa-cart-arrow-down"></i>Carrito</a>';
                echo '<a href="perfil.php"><i class="fa-solid fa-pen-to-square"></i>Perfil</a>';
                echo '<a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>';
            } else {
        ?>
            <a href="login.php"><i class="fa-solid fa-user"></i>Iniciar Sesión</a>
        <?php
            }
        ?>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="tienda.php">Tienda</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Ofertas</a></li>
            <?php
            if (esAdmin() || esModerador()) {
                echo '<li><a href="../PgAdmin/almacen.php">Almacén</a></li>';
                echo '<li><a href="../PgAdmin/ventas.php">Ventas</a></li>';
            }
            ?>
        </ul>
    </nav>
    <main class="tienda">
        <section>
            <?
                foreach ($array_productos as $key) {
                    echo "<article>";
                            echo '<img src="../'.$key['imagen_baja'].'" alt="productos_pelu">';
                            echo '<h3>'. $key['nombre']. '</h3>';
                            echo '<p class="precio"><b>'.$key['precio'].'€</b></p>';
                            echo '<a href="producto.php?cod_producto='.$key['cod_producto'].'" class="boton">Comprar <i class="fa-solid fa-cart-plus"></i></a>';                      
                    echo "</article>"; 
                }
            ?>
        </section>
    </main>
    <footer class="footer_registro">
        <div class="politicas">
            <a href="#">Politica de Cookies</a>
            <a href="#">Politica de Privacidad</a>
        </div>
    </footer>
</body>
</html>

