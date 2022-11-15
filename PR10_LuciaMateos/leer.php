<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/estilo.css">
    <title>Leer fichero</title>
</head>
<body>
    <?php
         echo '<link rel="stylesheet" href="./style.css">';
    ?>
    <?php
        require("validador.php");
        if (enviado()) {
            header('Location: ./editar.php?fichero='. $_REQUEST['fichero']);
            exit();
        }
    ?>
    <form action="./leer.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="fichero" value="<?php
            echo $_REQUEST['fichero'];
        ?>">
        <textarea name="area" id="idArea" cols="30" rows="10" readonly><?php
                if($abierto=fopen($_REQUEST['fichero'],'r')){
                    if (filesize($_REQUEST['fichero'])==0){
                        echo "Esta vacio";
                    }else{
                        while($linea=fgets($abierto,filesize($_REQUEST['fichero']))){
                            echo $linea;
                        }
                    }
                    fclose($abierto);
                }
            ?>
        </textarea>
        <input type="submit" value="editar" name="editar" class="colorin">
        
    </form>
</body>
</html>