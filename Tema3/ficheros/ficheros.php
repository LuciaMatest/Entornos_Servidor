<?php
/*    //Abrir un fichero SI EXISTE
    //Si se va a abrir para lectura con r
    //comprobar que existe antes
    ?>
    <h3>Leer un fichero</h3>
    <?
    //Leer
    if (!file_exists('miarchivo.txt')) {
        echo "<br>No existe";
    } else {
        echo "<br>Existe";
        if (!$fp = fopen('miarchivo.txt', 'r')) {
            echo "<br>Ha habido un problema al abrir el fichero";
        }else{
            //Leer el fichero entero
            $leido = fread($fp, filesize('miarchivo.txt'));
            echo "<br>".$leido;
            //Cerrar fichero
            fclose($fp);
        }
    }
    ?>
    <h3>Leer un fichero linea por linea</h3>
    <?
    //Leer linea por linea
    if (!file_exists('miarchivo.txt')) {
        echo "<br>No existe";
    } else {
        echo "<br>Existe";
        if (!$fp = fopen('miarchivo.txt', 'r')) {
            echo "<br>Ha habido un problema al abrir el fichero";
        }else{
            //Leer el fichero entero
            while ($lea = fgets($fp, filesize('miarchivo.txt'))) {
                echo "<br>";
                echo $lea;
            }
            //Cerrar fichero
            fclose($fp);
        }
    }
    ?>
    <h3>Escribir en un fichero</h3>
    <?
    //Escribir
    //Abrir el fichero para w
    if ($fp = fopen('miarchivo.txt', 'w')) {
        $escribir = '08/11/22';
        fwrite($fp, $escribir, strlen($escribir));
        fclose($fp);
    } else {
        echo "<br> Ha habido un error al abrir el fichero";
    }

    //Escribir a continuacion del documento
    if ($fp = fopen('miarchivo.txt', 'a')) {
        $escribir = ' Final del archivo';
        fwrite($fp, $escribir, strlen($escribir));
        fclose($fp);
    } else {
        echo "<br> Ha habido un error al abrir el fichero";
    }
*/
    //Cambiar la fecha 
    //replace str_replace
    //r+ - apertura para lectura y escritura. Puntero al principio del archivo
    if (!file_exists('miarchivo.txt')) {
        echo "<br>No existe";
    } else {
        echo "<br>Existe";
        if (!$fp = fopen('miarchivo.txt', 'r+')) {
            echo "<br>Ha habido un problema al abrir el fichero";
        }else{
            $leido = fread($fp, filesize('miarchivo.txt'));
            //reemplazar
            $remplaza = str_replace('/22', '/2022', $leido);
            //vuelve al inicio
            fseek($fp, 0);
            fwrite($fp, $remplaza, strlen($remplaza));
            fclose($fp);
        }
    }
?>