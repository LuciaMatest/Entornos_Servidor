<?php
    require './funciones/funcionesBD.php';       
    require('./seguro/conexion.php');     
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./webroot/css/style.css">
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
                        echo '<p>'.$producto['nombre']. '</p>';
                        echo "<a href='./verProducto.php?producto=".$producto['codigo']."'>Ver</a>";                        
                    echo "</article>"; 
                }
            ?>
        </section>
        <section class='vistos'>
            <h3>Vistos</h3>
            <?php
            
            ?>
        </section>
    </main>
</body>
</html>