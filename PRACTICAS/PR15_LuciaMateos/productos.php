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
        <section>
            <?
                foreach ($array_productos as $key) {
                    # code...
                }
            ?>
            <article>
                <img class="ordenador" src="multimedia/ordenador1.jpg">
                <h3>CHUWI HeroBook Pro</h3>
                <p>Portátil equipado con DDR4 de 8GB hace que el procesamiento multitarea sea más eficiente, SSD 256GB tiene una alta velocidad de lectura y escritura,...</p>
                <a href="#">Leer más</a>
            </article>
            <article>
                <img class="ordenador" src="multimedia/ordenador2.jpg">
                <h3>PC All in One HP Pavilion</h3>
                <p>Este PC All-in-One contiene un 15% de plásticos reciclados posconsumo y lo equivalente a tres botellas de plástico destinado a acabar en los océanos²...</p>
                <a href="#">Leer más</a>
            </article>
            <article>
                <img class="ordenador" src="multimedia/ordenador3.jpg">
                <h3 class="rojo">ASUS Flip C433TA</h3>
                <p>El impresionante ASUS Chromebook Flip C433 hace gala de un estilo contemporáneo, dimensiones compactas y una selección de componentes pensada para que hagas lo que te propongas sin complicaciones...</p>
                <a href="#">Leer más</a>
            </article>
        </section>
    </main>
    <footer>
        <div class="politicas">
            <a href="">Politica de Cookies</a>
            <a href="">Politica de Privacidad</a>
        </div>
    </footer>
</body>
</html>