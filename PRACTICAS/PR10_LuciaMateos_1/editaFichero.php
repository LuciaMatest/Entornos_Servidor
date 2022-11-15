<?php
    require('validar.php');
?>
<!DOCTYPE html>
<html lang="en">
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
            if ($open = fopen($_REQUEST['fichero'], 'c')) {
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
            <form action="./editaFichero" method="post">
                <textarea name="areaEditable" id="idEditable" cols="30" rows="10">
                    <?php
                        //Comprobamos que el fichero existe
                        if (!file_exists($_REQUEST['fichero'])) {
                            //Si esta abierto lo cerramos
                            if ($opened = fopen($_REQUEST['fichero'], 'c')) {
                                fclose($opened);
                            }
                        }else {
                            if ($opened = fopen($_REQUEST['fichero'], 'c+')) {
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
                    ?>
                </textarea>
                <input type="submit" value="Modificar" name="modificar">
            </form>
    </main>
</body>
</html>