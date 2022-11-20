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
            <li><a href="#">Notas</a></li>
        </ul>

        <table align="center">
            <tr>
                <th>Alumno</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Editar</th>
            </tr>
            <?php
            //abrimos el archivo notas para recoger los datos
            if (($open = fopen('notas.csv', 'r')) !== FALSE) {
                $contador = 0;
                //fgetcsv — Obtiene una línea de un puntero a un fichero y la analiza en busca de campos CSV
                while (($datos = fgetcsv($open, 0, ";")) !== FALSE) {
                    echo '<tr>';
                    //Usamos foreach para recorrer las filas y poner los datos en cada celda
                    foreach ($datos as $key => $celda) {
                        echo '<td>';
                        echo $celda;
                        echo '</td>';
                    }
                    echo "<td><a href='editaFichero.php?indice=".$contador++."'> Editar </a></td>";
                    echo '</tr>';
                }
                //Siempre se cierra
                fclose($open);
            }
            ?>
        </table>

        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=tablaFichero.php">Código principal</a></li>
            <li><a href="verCodigo.php?fichero=validar.php">Código validación</a></li>


            <li><a href="../../index.html">Volver</a></li>
        </ul>
    </main>
</body>

</html>