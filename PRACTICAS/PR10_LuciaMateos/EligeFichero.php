<?php
    require("./validar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        echo '<link rel="stylesheet" href="./style.css">';
    ?>
    <header>
        <h1>PR10</h1>
    </header>
    <?php
         if (enviado()) {
             if (existe('leer')) {
                 if (file_exists($_REQUEST['fichero'])){
                     header('Location: ./LeeFichero.php?fichero='. $_REQUEST['fichero']);
                 }
             }elseif (existe('editar')) {
                 header('Location: ./EditaFichero.php?fichero='. $_REQUEST['fichero']);
             }
         }
    ?>
    <main>
        <ul class="menú">
            <li><a href="#">Ficheros</a></li>
        </ul>
        <form action="./EligeFichero.php">
            <label for="idFichero">Nombre: </label>
            <input type="text" name="fichero" id="idFichero">
            <?php
                if (!existe('fichero')) {
                    echo "<p style='color: brown;'>Este fichero no existe</p>";
                }
            ?>
        </form>
        <input type="submit" value="Editar" name="editar">
        <input type="submit" value="Leer" name="leer">
        
        <ul class="menú"><li><a href="../../index.html">Volver</a></li></ul>
    </main>
</body>
</html>