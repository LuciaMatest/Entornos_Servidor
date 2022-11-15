<?php
    require('validar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 010</title>
</head>
<body>
    <header><h1>PR10</h1></header>
    <main>
        <ul class="menú"><li><a href="#">Lectura</a></li></ul>
            <form action="./eligeFichero" method="post">
                <label for="idFichero">Nombre: </label>
                <input type="text" name="fichero" id="idFichero">
                <!-- Comprobamos si existe el fichero -->
                <?php
                    if (enviado()) {
                        if (!file_exists($_REQUEST['fichero']) && existe('leer')){
                            ?>
                            <span style="color:brown"> No existe fichero, revise</span>
                            <?
                        }
                    }
                ?>
                <input type="submit" value="Editar" name="editar">
                <input type="submit" value="Leer" name="leer">
            </form>
    </main>
</body>
</html>