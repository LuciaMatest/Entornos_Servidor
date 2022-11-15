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
            header('Location: ./editaFichero.php?fichero='. $_REQUEST['fichero']);
            exit();
        }
    ?>
    <header><h1>PR10</h1></header>
    <main>
        <ul class="menú"><li><a href="#">Lectura</a></li></ul>
            <form action="./leeFichero.php" method="post">
                <textarea name="areaEditable" id="idEditable" cols="30" rows="10" readonly><?php
                        //Comprobamos que el fichero existe
                        if($opened=fopen($_REQUEST['fichero'],'r')){
                            //Comprobamos si esta vacio
                            if (filesize($_REQUEST['fichero'])==0){
                                echo "Vacio";
                            }else{
                                //Mientras escribimos se va rellenando el area de texto
                                while($texto=fgets($opened,filesize($_REQUEST['fichero']))){
                                    echo $texto;
                                }
                            }
                            fclose($opened);
                        }
                    ?></textarea>
                <input type="submit" value="Editar" name="editar">
            </form>
        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=leeFichero.php">Código leer</a></li>
            
            <li><a href="./eligeFichero.php">Volver</a></li></ul>
    </main>
</body>
</html>