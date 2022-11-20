<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Editar CSV</title>
</head>
<body>
    <header>Editar CSV</header>
    <?php
        $contfilas=$_REQUEST["fila"];
      

        $delimitador=";";
        $filas=0;
        $posicion=0;
        $cambio;
        if(!$fp=fopen("notas.csv", "r")){
            echo "A ocurrido un error al abrir el archivo";
        }else{
            while(($fila=fgetcsv($fp,0,$delimitador))!==false){
                echo "<tr>";
                $filas++;
                    if($filas==$contfilas){
                        ?>
                         <div id="divAlumno">
                            <br>
                        <form action="./guardarCSV.php" method ="post" enctype="multipart/form-data">
                        <?php
                            foreach ($fila as $numeroColumna => $columna) {
                                if($posicion>=1){
                                    ?>
                                    <input type="text" name="texto<?php echo $posicion?>" id="texto" value="<?php echo $columna?>">
                                    <?php
                                    $posicion++;
                                }else{
                                    ?>
                                    <input type="text" name="nombre" id="idNombre" readonly value="<?php echo $columna?>">
                                    <?php
                                    $posicion++;
                                }           
                            }
                        ?>
                        <input type="hidden" name="fila" value="<?php echo $contfilas?>">
                        <input type="submit" value="guardar" name="guardar">
                        </form>
                        </div>
                        <?php
                    }
                echo "</td>";
                echo "</tr>";
            }
            fclose($fp);
        }
    ?> 
    <a id="volver" href="..">Volver</a>
    <footer>
        <a href="./verPag.php?pagina=leeCSV.php">Ver Código</a>
        
    </footer>   
</body>
</html>