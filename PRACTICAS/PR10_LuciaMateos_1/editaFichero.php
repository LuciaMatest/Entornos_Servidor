<?php
    require('validar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Tarea 010</title>
</head>
<body>
    <?php
        if (enviado()) {
            //Abrimos el fichero en el cual podremos escribir
            if ($open = fopen($_REQUEST['fichero'], 'w')) {
                //escribimos
                $write = $_REQUEST['areaEditable'];
                fwrite($open,$write,strlen($write));
                //hay que asegurarse de cerrarlo siempre
                fclose($open);
            }
            header('Location: ./leeFichero.php?fichero='. $_REQUEST['fichero']);
            exit();
        }
    ?>
    <header><h1>PR10</h1></header>
    <main>
        <ul class="menú"><li><a href="#">Editable</a></li></ul>
            <form action="./editaFichero.php" method="post">
                <textarea name="areaEditable" id="idEditable" cols="30" rows="10" style="resize: none;"><?php
                        //Comprobamos que el fichero existe
                        if (!file_exists($_REQUEST['fichero'])) {
                            //Si esta abierto lo cerramos
                            if ($opened = fopen($_REQUEST['fichero'], 'w')) {
                                fclose($opened);
                            }
                        }else {
                            if ($opened = fopen($_REQUEST['fichero'], 'r+')) {
                                //Comprobamos si esta vacio
                                if (filesize($_REQUEST['fichero'])==0){
                                    echo "Vacio";
                                }else {
                                    //Mientras escribimos se va rellenando el area de texto
                                    while ($text = fgets($opened,filesize($_REQUEST['fichero']))) {
                                        echo $text;
                                    }
                                } fclose($opened);
                            }
                        }
                    ?></textarea>
                <input type="submit" value="Leer" name="leer">
            </form>
        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=editaFichero.php">Código editar</a></li>

            <li><a href="./eligeFichero.php">Volver</a></li>
        </ul>
    </main>
</body>
</html>