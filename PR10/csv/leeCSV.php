<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
    <header>PR010 Lectura de CSV</header>
    <div id="tabla">
        Tabla de alumnos:
        <table >
            <!-- Primera linea de la tabla -->
            <tr>
                <td>Alumno</td>
                <td>Nota 1</td>
                <td>Nota 2</td>
                <td>Nota 3</td>
                <td>Editar</td>
            </tr>

            <!-- Lectura del archivo csv -->
            <?php
                $delimitador=";";
                $filas=0;
                if(!$fp=fopen("notas.csv", "r")){
                    echo "A ocurrido un error al abrir el archivo";
                }else{
                    while(($fila=fgetcsv($fp,0,$delimitador))!==false){
                        echo "<tr>";
                        $filas++;
                            foreach ($fila as $numeroColumna => $columna) {
                                echo "<td>";    
                                echo $columna;
                                echo "</td>";
                            }
                            echo "<td>";
                            ?>
                            <form action="./EditaCSV.php" method ="post" enctype="multipart/form-data">
                                <input type="hidden" name="fila" value="<?php echo $filas?>">
                                <input type="submit" value="Editar" name="editar">
                            </form>
                            <?php
                            echo "</td>";
                        echo "</tr>";
                    }
                    fclose($fp);
                }

            ?>



        </table>
    </div>
    <a id="volver" href="..">Volver</a>
    <footer>
        <a href="./verPag.php?pagina=leeCSV.php">Ver Código</a>
        
    </footer>
</body>
</html>