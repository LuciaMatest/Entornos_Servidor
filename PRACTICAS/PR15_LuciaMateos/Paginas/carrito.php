<?php
    require('../Funciones/funcionesBD.php');
    require('../Funciones/BD.php');
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
    <title>Carrito</title>
</head>
<body>
<?    
    session_start();
    if (estaValidado()) {
        ventaProducto();
        header('Location: ../index.php');
        exit;
    }else {
        header('Location: ../login.php');
        exit;
    }
?>
</body>
</html>