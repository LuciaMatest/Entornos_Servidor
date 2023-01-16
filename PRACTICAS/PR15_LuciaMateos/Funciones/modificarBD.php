<?php
    require('funcionesBD.php');
    require('BD.php');
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
    <title>modificarBBDD</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="../imagen/logo.png" alt="logo" class="icono_logo">
        </div>
        <div class="botones">
        <?php
            session_start();
            if (estaValidado()) {
                echo '<a href="../Paginas/carrito.php"><i class="fa-solid fa-cart-arrow-down"></i>Carrito</a>';
                echo '<a href="../Paginas/perfil.php"><i class="fa-solid fa-pen-to-square"></i>Perfil</a>';
                echo '<a href="../Paginas/logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>';
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
            <li><a href="../Paginas/tienda.php">Tienda</a></li>
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
    <main class="modificar">
        <?php
            $opcion=$_REQUEST['opcion'];

            //Eliminar
            if ($opcion == 'elimina_venta') {
                $clave=$_REQUEST['clave'];
                try {
                    $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                    $elimina = "delete from ventas where id_ventas='" .$_REQUEST['clave']. "';" ;
                    $conexion->exec($elimina);
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
                }finally{
                    unset($conexion);
                }

                header("Location: ../PgAdmin/ventas.php");
            }
            if ($opcion == 'elimina_albaran') {
                $clave=$_REQUEST['clave'];
                try {
                    $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                    $elimina = "delete from albaran where id_albaran='" .$_REQUEST['clave']. "';" ;
                    $conexion->exec($elimina);
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
                }finally{
                    unset($conexion);
                }

                header("Location: ../PgAdmin/almacen.php");
            }
            if (enviado()) {
                //Modificar
                if ($opcion == 'modifica_ventas') {
                    $clave=$_REQUEST['clave'];
                    try {
                        $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                        $actualiza = "update ventas set id_ventas='" .$_REQUEST['id_ventas']. "',usuario_ventas='" .$_REQUEST['usuario_ventas']. "',fecha_compra='" .$_REQUEST['fecha_compra']. "',cod_producto='" .$_REQUEST['cod_producto']. "',cantidad='" .$_REQUEST['cantidad']. "',precio_total='" .$_REQUEST['precio_total']. "' where id_ventas='" . $_REQUEST['clave'] . "';" ;
                        $conexion->exec($actualiza);
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
                    }finally{
                        unset($conexion);
                    }
                    header("Location: ../PgAdmin/ventas.php");
                }
                if ($opcion == 'modifica_albaran') {
                    $clave=$_REQUEST['clave'];
                    try {
                        $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                        $actualiza = "update albaran set id_albaran='" .$_REQUEST['id_albaran']. "',fecha_albaran='" .$_REQUEST['fecha_albaran']. "',cod_producto='" .$_REQUEST['cod_producto']. "',cantidad='" .$_REQUEST['cantidad']. "',usuario_albaran='" .$_REQUEST['usuario_albaran']. "' where id_albaran='" . $_REQUEST['clave'] . "';" ;
                        $conexion->exec($actualiza);
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
                    }finally{
                        unset($conexion);
                    }
                    header("Location: ../PgAdmin/almacen.php");
                }
                if ($opcion == 'modifica_productos') {
                    $clave=$_REQUEST['clave'];
                    try {
                        $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                        $actualiza = "update productos set cod_producto='" .$_REQUEST['cod_producto']. "',nombre='" .$_REQUEST['nombre']. "',descripcion='" .$_REQUEST['descripcion']. "',precio='" .$_REQUEST['precio']. "',stock='" .$_REQUEST['stock']. "' where cod_producto='" . $_REQUEST['clave'] . "';" ;
                        $conexion->exec($actualiza);
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
                    }finally{
                        unset($conexion);
                    }
                    header("Location: ../PgAdmin/almacen.php");
                }
                if ($opcion == 'añadir_productos') {
                    try {
                        $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                        $inserta = "insert into productos (cod_producto, nombre, descripcion, precio, stock) values (?,?,?,?,?)";
                        $sql_preparada=$conexion->prepare($inserta);
                        $array= array($_REQUEST['cod_producto'], $_REQUEST['nombre'],$_REQUEST['descripcion'],(int)$_REQUEST['precio'],(int)$_REQUEST['stock']);
                        $sql_preparada->execute($array);
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
                    }finally{
                        unset($conexion);
                    }
                    header("Location: ../PgAdmin/almacen.php");
                }
                
            }
        ?>
        <?
            //Mostraremos la informacion que queremos modificar dependiendo de que 'boton' seleccionemos
            try {
                $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                if ($opcion == 'modifica_ventas') {
                    $clave=$_REQUEST['clave'];
                    //Seleccionamos todos los datos de una de la opciones que tenemos en la lista
                    $sql="select * from ventas where id_ventas='" . $_REQUEST['clave'] . "';";
                    $resultado=$conexion->query($sql);
                    //Recorremos la tabla
                    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                        $id_ventas = $row['id_ventas'];
                        $usuario_ventas = $row['usuario_ventas'];
                        $fecha_compra = $row['fecha_compra'];
                        $cod_producto = $row['cod_producto'];
                        $cantidad = $row['cantidad'];
                        $precio_total = $row['precio_total'];
                    }
                }
                if ($opcion == 'modifica_albaran') {
                    $clave=$_REQUEST['clave'];
                    //Seleccionamos todos los datos de una de la opciones que tenemos en la lista
                    $sql="select * from albaran where id_albaran='" . $_REQUEST['clave'] . "';";
                    $resultado=$conexion->query($sql);
                    //Recorremos la tabla
                    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                        $id_albaran = $row['id_albaran'];
                        $fecha_albaran = $row['fecha_albaran'];
                        $cod_producto = $row['cod_producto'];
                        $cantidad = $row['cantidad'];
                        $usuario_albaran = $row['usuario_albaran'];
                    }
                }
                if ($opcion == 'modifica_productos') {
                    $clave=$_REQUEST['clave'];
                    //Seleccionamos todos los datos de una de la opciones que tenemos en la lista
                    $sql="select * from productos where cod_producto='" . $_REQUEST['clave'] . "';";
                    $resultado=$conexion->query($sql);
                    //Recorremos la tabla
                    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                        $cod_producto = $row['cod_producto'];
                        $nombre = $row['nombre'];
                        $descripcion = $row['descripcion'];
                        $precio = $row['precio'];
                        $stock = $row['stock'];
                    }
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
            }finally{
                unset($conexion);
            }

        if ($opcion == 'modifica_ventas') {
        ?>
        <div class="mod_ventas">
            <h1>Modificar Ventas</h1>
            <!-- Formulario -->
            <form action="./modificarBD.php" method="post">
                <input type="hidden" name="opcion"
                value="<?
                    echo $opcion;
                ?>">
                <input type="hidden" name="clave" value="<?
                    if ($opcion=='modifica_ventas') {
                        echo $clave;
                    }
                ?>">
                <p>
                <label for="id_ventas">ID:</label>
                <input type="text" name="id_ventas" id="id_ventas" placeholder="id_ventas" readonly
                value="<?
                    if ($opcion == 'modifica_ventas') {
                        echo $id_ventas;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("id_ventas")){
                            ?>
                            <span style="color:brown"> Introduce id</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="usuario_ventas">Usuario:</label>
                <input type="text" name="usuario_ventas" id="usuario_ventas" placeholder="usuario_ventas" readonly
                value="<?
                    if ($opcion == 'modifica_ventas') {
                        echo $usuario_ventas;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("usuario_ventas")){
                            ?>
                            <span style="color:brown"> Introduce usuario</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="fecha_compra">Fecha:</label>
                <input type="text" name="fecha_compra" id="fecha_compra" placeholder="aaaa-mm-dd"
                value="<?
                    if ($opcion == 'modifica_ventas') {
                        echo $fecha_compra;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("fecha")){
                            ?>
                            <span style="color:brown"> Introduce fecha</span>
                            <?
                        }
                    } 
                ?>
                </p>
                <p>
                <label for="cod_producto">Codigo producto:</label>
                <input type="number" name="cod_producto" id="cod_producto" placeholder="cod_producto" readonly
                value="<?
                    if ($opcion == 'modifica_ventas') {
                        echo $cod_producto;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("cod_producto")){
                            ?>
                            <span style="color:brown"> Introduce código</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" placeholder="cantidad"
                value="<?
                    if ($opcion == 'modifica_ventas') {
                        echo $cantidad;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("cantidad")){
                            ?>
                            <span style="color:brown"> Introduce cantidad</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="precio_total">Precio total:</label>
                <input type="number" name="precio_total" id="precio_total" placeholder="precio_total"
                value="<?
                    if ($opcion == 'modifica_ventas') {
                        echo $precio_total;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("precio_total")){
                            ?>
                            <span style="color:brown"> Introduce precio</span>
                            <?
                        }
                    }
                ?>
                </p>
                <div>
                    <input type="submit" value="Modificar_ventas" name="enviar" class="boton">
                    <a href="../PgAdmin/ventas.php">Volver</a>
                </div>
            </form>
        </div>
        <?
        } elseif ($opcion == 'modifica_albaran') {
        ?>
        <div class="mod_albaran">
            <h1>Modificar Albarán</h1>
            <!-- Formulario -->
            <form action="./modificarBD.php" method="post">
                <input type="hidden" name="opcion"
                value="<?
                    echo $opcion;
                ?>">
                <input type="hidden" name="clave" value="<?
                    if ($opcion=='modifica_albaran') {
                        echo $clave;
                    }
                ?>">
                <p>
                <label for="id_albaran">ID:</label>
                <input type="text" name="id_albaran" id="id_albaran" placeholder="id_albaran" readonly
                value="<?
                    if ($opcion == 'modifica_albaran') {
                        echo $id_albaran;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("id_albaran")){
                            ?>
                            <span style="color:brown"> Introduce id</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="fecha_albaran">Fecha:</label>
                <input type="text" name="fecha_albaran" id="fecha_albaran" placeholder="aaaa-mm-dd"
                value="<?
                    if ($opcion == 'modifica_albaran') {
                        echo $fecha_albaran;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("fecha_albaran")){
                            ?>
                            <span style="color:brown"> Introduce fecha</span>
                            <?
                        }
                    } 
                ?>
                </p>
                <p>
                <label for="cod_producto">Codigo producto:</label>
                <input type="number" name="cod_producto" id="cod_producto" placeholder="cod_producto" readonly
                value="<?
                    if ($opcion == 'modifica_albaran') {
                        echo $cod_producto;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("cod_producto")){
                            ?>
                            <span style="color:brown"> Introduce código</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" placeholder="cantidad"
                value="<?
                    if ($opcion == 'modifica_albaran') {
                        echo $cantidad;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("cantidad")){
                            ?>
                            <span style="color:brown"> Introduce cantidad</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="usuario_albaran">Usuario:</label>
                <input type="text" name="usuario_albaran" id="usuario_albaran" placeholder="usuario_albaran" readonly
                value="<?
                    if ($opcion == 'modifica_albaran') {
                        echo $usuario_albaran;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("usuario_albaran")){
                            ?>
                            <span style="color:brown"> Introduce usuario</span>
                            <?
                        }
                    }
                ?>
                </p>
                <div>
                    <input type="submit" value="Modificar_albarán" name="enviar" class="boton">
                    <a href="../PgAdmin/almacen.php">Volver</a>
                </div>
            </form>
        </div>
        <?
        } elseif ($opcion == 'modifica_productos') {
        ?>
        <div class="mod_productos">
            <h1>Modificar producto</h1>
            <!-- Formulario -->
            <form action="./modificarBD.php" method="post">
                <input type="hidden" name="opcion"
                value="<?
                    echo $opcion;
                ?>">
                <input type="hidden" name="clave" value="<?
                    if ($opcion=='modifica_productos') {
                        echo $clave;
                    }
                ?>">
                <p>
                <label for="cod_producto">ID:</label>
                <input type="text" name="cod_producto" id="cod_producto" placeholder="cod_producto" readonly
                value="<?
                    if ($opcion == 'modifica_productos') {
                        echo $cod_producto;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("cod_producto")){
                            ?>
                            <span style="color:brown"> Introduce id</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="nombre" readonly
                value="<?
                    if ($opcion == 'modifica_productos') {
                        echo $nombre;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("nombre")){
                            ?>
                            <span style="color:brown"> Introduce nombre</span>
                            <?
                        }
                    } 
                ?>
                </p>
                <p>
                <label for="descripcion">Descripcion:</label>
                <input type="text" name="descripcion" id="descripcion" placeholder="descripcion"
                value="<?
                    if ($opcion == 'modifica_productos') {
                        echo $descripcion;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("descripcion")){
                            ?>
                            <span style="color:brown"> Introduce descripcion</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="precio"
                value="<?
                    if ($opcion == 'modifica_productos') {
                        echo $precio;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("precio")){
                            ?>
                            <span style="color:brown"> Introduce precio</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="stock">Stock:</label>
                <input type="number" name="stock" id="stock" placeholder="stock" readonly
                value="<?
                    if ($opcion == 'modifica_productos') {
                        echo $stock;
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("stock")){
                            ?>
                            <span style="color:brown"> Introduce stock</span>
                            <?
                        }
                    }
                ?>
                </p>
                <div>
                    <input type="submit" value="Modificar_producto" name="enviar" class="boton">
                    <a href="../PgAdmin/almacen.php">Volver</a>
                </div>
            </form>
        </div>
        <?
        } elseif ($opcion == 'añadir_productos'){
        ?>
        <div class="aña_productos">
            <h1>Añadir producto</h1>
            <!-- Formulario -->
            <form action="./modificarBD.php" method="post">
                <p>
                <label for="cod_producto">ID:</label>
                <input type="text" name="cod_producto" id="cod_producto" placeholder="cod_producto"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("cod_producto")) {
                        echo $_REQUEST["cod_producto"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("cod_producto")){
                            ?>
                            <span style="color:brown"> Introduce id</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="nombre"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("nombre")) {
                        echo $_REQUEST["nombre"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("nombre")){
                            ?>
                            <span style="color:brown"> Introduce nombre</span>
                            <?
                        }
                    } 
                ?>
                </p>
                <p>
                <label for="descripcion">Descripcion:</label>
                <input type="text" name="descripcion" id="descripcion" placeholder="descripcion"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("descripcion")) {
                        echo $_REQUEST["descripcion"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("descripcion")){
                            ?>
                            <span style="color:brown"> Introduce descripcion</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="precio"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("precio")) {
                        echo $_REQUEST["precio"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("precio")){
                            ?>
                            <span style="color:brown"> Introduce precio</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="stock">Stock:</label>
                <input type="number" name="stock" id="stock" placeholder="stock" 
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("stock")) {
                        echo $_REQUEST["stock"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("stock")){
                            ?>
                            <span style="color:brown"> Introduce stock</span>
                            <?
                        }
                    }
                ?>
                </p>
                <div>
                    <input type="submit" value="Añadir" name="enviar" class="boton">
                    <a href="../PgAdmin/almacen.php">Volver</a>
                </div>
            </form>
        </div>
        <?    
        }
        ?>
        <?
        if (enviado()) {
            if ($opcion == 'añadir_stock') {
                añadirStock();
                header("Location: ../PgAdmin/albaran.php");
            }
        }
        ?>
    </main>
    <footer>
        <div class="politicas">
            <a href="#">Politica de Cookies</a>
            <a href="#">Politica de Privacidad</a>
        </div>
    </footer>
</body>
</html>