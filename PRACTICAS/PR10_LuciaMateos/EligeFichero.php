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
    <main>
        <ul class="menú">
            <li><a href="#">Ficheros</a></li>
        </ul>
        <form action="./EligeFichero.php"  method="post" enctype="multipart/form-data">
            <label for="idFichero">Nombre: </label>
            <input type="text" name="fichero" id="idFichero"
            value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("fichero")) {
                        echo $_REQUEST["fichero"];
                    }
                ?>">
            <?
                    //comprobar que existe, si lo está pongo un error
                    if (enviado()) {
                        if (!file_exists($_FILES['fichero'] && existe('leer'))) {
                            ?>
                            <span style="color:brown"> No existe fichero</span>
                            <?
                        } 
                    }
                ?>
        </form>
        <input type="submit" value="Editar" name="editado">
        <input type="submit" value="Leer" name="leido">
        
        <ul class="menú"><li><a href="../../index.html">Volver</a></li></ul>
    </main>
</body>
</html>