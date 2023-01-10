<?php
    require './funciones/funcionesBD.php';       
    require('./seguro/conexion.php');     

    if (isset($_REQUEST['producto'])) {
        header('Location: ./index.php');
    } else{
        $id = $_REQUEST['producto'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./webroot/css/style.css">
    <title>Ver</title>
</head>
<body>
    <section class='productos'>
        <h1>Producto</h1>
        <?php
            $producto= findById($id);
            print_r($producto);
        ?>
    </section>
    <section class='vistos'>
            <h3>Vistos</h3>
            <?php
            
            ?>
    </section>
</body>
</html>