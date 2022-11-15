<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/estilo.css">
    <title>Elegir fichero || ManuelHG</title>
</head>
<body>

<?php
    echo '<link rel="stylesheet" href="./style.css">';
    require("validador.php");
    if (enviado()) {
        if (existe('leer')) {
            if (file_exists($_REQUEST['fichero'])){
                header('Location: ./leer.php?fichero='. $_REQUEST['fichero']);
                exit();
            }
        }elseif (existe('editar')) {
            header('Location: ./editar.php?fichero='. $_REQUEST['fichero']);
            exit();
        }
    }

    //si ha sido enviado el form comprobar si es leer y editar 
    // si es leer comprobar si existe ffichero
    // si no mensaje de error y formu 
    // si existe "header"
?>
    <form action="./eligeFichero.php" method="post">
        <p>
            <label for="idFichero">Nombre: </label>
            <input type="text" name="fichero" id="idFichero">

            <?php
                if (enviado()) {
                    if (!file_exists($_REQUEST['fichero']) && existe('leer')) {
                        echo "<p style='color: red;'>Este fichero no existe</p>";
                    }
                }

            ?>


            <input type="submit" value="Editar" name="editar" class="colorin">
            <input type="submit" value="Leer" name="leer" class="colorin">
        </p>
    </form>
</body>
</html>