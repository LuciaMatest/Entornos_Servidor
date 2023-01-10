<?php
    require './funciones/funcionesBD.php';
    require './funciones/funcionesCookies.php'; 
    require('./seguro/conexion.php');     

    //si no llega el id del profucto en la url lo devuelve al index
    if (!isset($_REQUEST['producto'])) {
        header('Location: ./index.php');
    } else{
        $id = $_REQUEST['producto'];
        crearCookie($id);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./webroot/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Ver</title>
</head>
<body>
    <section class='productos'>
        <h1>Producto</h1>
        <?php
            $producto = findById($id);
            $producto =$producto[0];
            echo "<article>";
                echo '<img src= "./webroot/'.$producto['alta'].'" alt="pan">';
                echo '<p>'.$producto['nombre']. '</p>';    
                echo '<p>'.$producto['descripcion']. '</p>';                  
            echo "</article>"; 
        ?>
    </section>
    <section class='vistos'>
            <h3>Vistos</h3>
            <?php
            
            ?>
    </section>
    <a href="./index.php">Volver</a>
</body>
</html>