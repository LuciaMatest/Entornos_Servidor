<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/estilo.css">
    <title>Editar fichero</title>
</head>
<body>
    <?php
        echo '<link rel="stylesheet" href="./style.css">';
    ?>
    <?php
        require("validador.php");
        if (enviado()){
            if ($abrir=fopen($_REQUEST['fichero'],'w')){
                $escribir=$_REQUEST['area'];
                fwrite($abrir,$escribir,strlen($escribir));
                fclose($abrir);
            }
            header('Location: ./leer.php?fichero='. $_REQUEST['fichero']);
            exit();
        }

    ?>
    <form action="./editar.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="fichero" value="<?php
            echo $_REQUEST['fichero'];
        ?>">
        <textarea name="area" id="idArea" cols="30" rows="10"><?php
                if (!file_exists($_REQUEST['fichero'])){
                    if($abierto=fopen($_REQUEST['fichero'],'w')){
                        fclose($abierto);
                    }
                }else{
                    if($abierto=fopen($_REQUEST['fichero'],'r+')){
                        if (filesize($_REQUEST['fichero'])==0){
                           echo "Esta vacio escribe algo:";
                        }else {
                            while($linea=fgets($abierto,filesize($_REQUEST['fichero']))){
                                echo $linea;
                            }
                        }
                        fclose($abierto);
                    }
                }
            ?></textarea>
            <br>
        <input type="submit" value="leer" name="leer" class="colorin">
    </form>
</body>
</html>