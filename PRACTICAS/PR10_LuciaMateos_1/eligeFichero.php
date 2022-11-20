<?php
    require('validar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Tarea 010</title>
</head>
<body>
    <?php
        //Comprobamos que se ha enviado y si existe en ambos casos
        if (enviado()) {
            if (existe('editar')) {
                header('Location: ./editaFichero.php?fichero='. $_REQUEST['fichero']);
                exit();
            } elseif (existe('leer')) {
                if (file_exists($_REQUEST['fichero'])) {
                    header('Location: ./leeFichero.php?fichero='. $_REQUEST['fichero']);
                    exit();
                }
            }
        }
    ?>
    <header><h1>PR10</h1></header>
    <main>
        <ul class="menú"><li><a href="#">Fichero</a></li></ul>
            <form action="./eligeFichero.php" method="post">
                <label for="idFichero">Nombre: </label>
                <input type="text" name="fichero" id="idFichero">
                <!-- Comprobamos si existe el fichero -->
                <?php
                    if (enviado()) {
                        if (!file_exists($_REQUEST['fichero']) && existe('leer')){
                            ?><span style="color:brown"> No existe fichero, revise</span><?
                        }
                    }
                ?>
                <input type="submit" value="Editar" name="editar">
                <input type="submit" value="Leer" name="leer">
            </form>
        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=eligeFichero.php">Código principal</a></li>
            <li><a href="verCodigo.php?fichero=validar.php">Código funciones</a></li>

            
            <li><a href="../../index.html">Volver</a></li>
        </ul>
    </main>
</body>
</html>