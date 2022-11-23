<?php
    require('validar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>XML Leer</title>
</head>
<body>
    <header>
        <h1>PR11</h1>
    </header>
    <main>
        <ul class="menú"><li><a href="#">XML - Tabla</a></li></ul>
        <table align="center">
            <tr>
                <th>Alumno</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Editar</th>
            </tr>
            <?php
                $contador = 0;
                $notas = simplexml_load_file('notas.xml');
                
                foreach ($notas as $celdas) {
                    echo '<tr>';
                    echo '<td>' .$celdas->children()[0]. '</td>';
                    echo '<td>' .$celdas->children()[1]. '</td>';
                    echo '<td>' .$celdas->children()[2]. '</td>';
                    echo '<td>' .$celdas->children()[3]. '</td>';
                    echo "<td><a href='editaFichero.php?indice=".$contador++."'> Editar </a></td>";
                    echo '</tr>';
                }
            ?>
        </table>
        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=leeFicheroXML.php">Código</a></li>
            <li><a href="./transformaFichero.php">Volver</a></li>
        </ul>
    </main>
</body>
</html>