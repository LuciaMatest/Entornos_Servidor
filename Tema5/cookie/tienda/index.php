<?php
    require './funciones/funcionesBD.php';       
    require('./seguro/conexion.php');
    require './funciones/funcionesCookies.php'; 
     
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./webroot/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Tienda</title>
</head>
<body>
    <h1>Mi panaderia</h1>
    <main>
        <section class='productos'>
            <h3>Todos</h3>
            <?php
                $lista = findAll();
                foreach ($lista as $producto) {
                    echo "<article>";
                        echo '<img src= "./webroot/'.$producto['baja'].'" alt="pan">';
                        echo '<h2>'.$producto['nombre']. '</h2>';
                        echo "<a href='./verProducto.php?producto=".$producto['codigo']."'>Ver</a>";                        
                    echo "</article>"; 
                }
            ?>
        </section>
        <section class='vistos'>
            <h3>Vistos</h3>
            <?php
            //recorremos 
            monstrarUltimos();
            ?>
        </section>
    </main>
</body>
</html>