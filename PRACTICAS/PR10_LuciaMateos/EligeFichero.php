<?php
    require("./validar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        echo '<link rel="stylesheet" href="./style.css">';
    ?>
    <header>
        <h1>PR10</h1>
    </header>
    <?php
        if(enviado()){
            if(existe("fichero")){
                if(existe("editar")){
                        header("location: ./EditaFichero.php?Fichero=".$_REQUEST["fichero"]);
                } else if(existe("leer")) {
                    if(file_exists($_REQUEST["fichero"])){
                        header("location: ./LeeFichero.php?Fichero=".$_REQUEST["fichero"]);
                    }else {
                        echo "<span style:'color: brown;'>No existe</span>";
                    }
                }
            }    
        }
    ?>
    <main>
        <ul class="menú">
            <li><a href="#">Ficheros</a></li>
        </ul>
        <form action="./EligeFichero.php" method="post" enctype="multipart/form-data">
            <label for="idNombre">Nombre</label>
            <input type="text" name="fichero" id="idNombre" placeholder="fichero.txt"
            value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("fichero")) {
                        echo $_REQUEST["fichero"];
                    }
            ?>">
            
        </form>
        <input type="submit" value="Editar" name="editar">
        <input type="submit" value="Leer" name="leer">
        
        <ul class="menú"><li><a href="../../index.html">Volver</a></li></ul>
    </main>
</body>
</html>