<?php
    require('validar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>tabla notas</title>
</head>

<body>
    <header>
        <h1>PR10_2</h1>
    </header>
    <main>
        <ul class="menú">
            <li><a href="#">Editar notas</a></li>
        </ul>
        <?php
        $filas = 0;
        $array_datos = array();
        if (($open = fopen('notas.csv', 'r')) !== FALSE) {
            while (($datos = fgetcsv($open, 0, ";")) !== FALSE) {
                array_push($array_datos, $datos);
            }
            fclose($open);
        }
        ?>
        <form action="./editaFichero.php" method="post">
            <label for="idNombre">Nombre:</label>
            <input type="text" name="nombre" id="idNombre" readonly value="<?php
            echo reset($array_datos);
            ?>">
           
            <label for="idNota1">Nota 1:</label>
            <input type="text" name="nota1" id="idNota1">
            
            <label for="idNota2">Nota 2:</label>
            <input type="text" name="nota2" id="idNota2">
           
            <label for="idNota3">Nota 3:</label>
            <input type="text" name="nota3" id="idNota3">
            
            <input type="submit" value="Guardar" name="guardar">
        </form>
        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=editaFichero.php">Código edición</a></li>

            <li><a href="./tablaFichero.php">Volver</a></li>
        </ul>
    </main>
</body>

</html>