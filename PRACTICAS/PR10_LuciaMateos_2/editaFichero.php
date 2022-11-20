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
    <title>tabla notas</title>
</head>

<body>
    <?php
        $array_datos = array();
        $nombre = $_REQUEST['nombre'];
        //Abrimos para leer el archivo
        if (($open = fopen('notas.csv', 'r')) !== FALSE) {
            while (($datos = fgetcsv($open, 0, ";")) !== FALSE) {
                array_push($array_datos, $datos);
            }
            fclose($open);
        }
    ?>
    <header>
        <h1>PR10_2</h1>
    </header>
    <main>
        <ul class="menú"><li><a href="#">Editar notas</a></li></ul>
        <?php
            if (verificar()){
                //Volvemos a abrir el archivo para escribir 
                if (($open = fopen('notas.csv', 'w')) !== FALSE) {
                    foreach ($array_datos as $celda => $celda_valor) {
                        if ($celda_valor[0]==$nombre) {
                            $celda_valor[1] = $_REQUEST['nota1'];
                            $celda_valor[2] = $_REQUEST['nota2'];
                            $celda_valor[3] = $_REQUEST['nota3'];
                            fputcsv($open, $celda_valor, ";");
                        } else {
                            fputcsv($open, $celda_valor, ";");
                        }
                    }
                }
                fclose($open);
                header('Location: ./tablaFichero.php');
                exit();
            }else{
                $mostrarDatos;
                if (($open = fopen('notas.csv', 'r')) !== FALSE) {
                    while (($datos = fgetcsv($open, 0, ";")) !== FALSE) {
                        foreach ($notas as $key) {
                            if ($notas[0]==$nombre) {
                                $mostrarDatos=$notas;
                            }
                        }
                    }
                    fclose($open);
                }
        ?>
        <form action="./editaFichero.php" method="post">
            <?echo '<pre>',print_r($array_datos),'</pre>'?>
        
            <p>
                <label for="idNombre">Nombre:</label>
                <input type="text" name="nombre" id="idNombre" readonly value="<?php
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("nombre")) {
                        echo $_REQUEST["nombre"];
                    } else {
                        echo $mostrarDatos[0];
                    }
                ?>">

                <label for="idNota1">Nota 1:</label>
                <input type="text" name="nota1" id="idNota1" value="<?php
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("nota1")) {
                        echo $_REQUEST["nota1"];
                    } else {
                        echo $mostrarDatos[1];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y es correcto, si lo está pongo un error
                    if (enviado()){
                        if (vacio("nota1")) {
                            ?>
                            <span style="color:brown"> Nota no introducida, revise</span>
                            <?
                        }
                    } 
                ?>

                <label for="idNota2">Nota 2:</label>
                <input type="text" name="nota2" id="idNota2" value="<?php
                    echo $array_datos[$_REQUEST['filas']][2];
                ?>">
                <?
                    //comprobar que no este vacio y es correcto, si lo está pongo un error
                    if (enviado()){
                        if (vacio("nota2")) {
                            ?>
                            <span style="color:brown"> Nota no introducida, revise</span>
                            <?
                        }
                    } 
                ?>

                <label for="idNota3">Nota 3:</label>
                <input type="text" name="nota3" id="idNota3" value="<?php
                   echo $array_datos[$_REQUEST['filas']][3];
                ?>">
                <?
                    //comprobar que no este vacio y es correcto, si lo está pongo un error
                    if (enviado()){
                        if (vacio("nota3")) {
                            ?>
                            <span style="color:brown"> Nota no introducida, revise</span>
                            <?
                        }
                    } 
                ?>
            </p>
            
            <input type="submit" value="Guardar" name="guardar">
        </form>
        <?php
        }
        ?>
        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=editaFichero.php">Código edición</a></li>

            <li><a href="./tablaFichero.php">Volver</a></li>
        </ul>
    </main>
</body>

</html>