<?php
    require("./validar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        echo '<link rel="stylesheet" href="./style.css">';
    ?>
    <header>
        <h1>Edición</h1>
    </header>
    <textarea name="texto" id="idTexto" cols="30" rows="10" readonly>
        <?php
            if($abierto=fopen($_REQUEST['fichero'],'r')){
                while($linea=fgets($abierto,filesize($_REQUEST['fichero']))){
                    echo $linea;
                }
            }
        ?>
    </textarea>
    <input type="submit" value="Editar" name="editar">
    <input type="submit" value="Leer" name="leer">
    <ul class="menú"><li><a href="../../index.html">Volver</a></li></ul>
</body>
</html>