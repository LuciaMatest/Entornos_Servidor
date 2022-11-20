<?php
    require("./validaForm.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>EligeFichero</title>
</head>

<body>
    <header>PR010 Lectura de ficheros</header>
    <div>
        <!-- Verificar con php si ha sido enviado el formulario y si ha sido enviado si existe el fichero y si existe o no,  -->
        <br>
        <form action="./validaForm.php" method ="post" enctype="multipart/form-data">
            <label for="fichero">Nombre:</label>
            <input type="text" name="fichero" placeholder="fichero.txt">
            <br>
            <?php
            ?>
            <input type="submit" value="Editar" name="editado">
            <input type="submit" value="Leer" name="leido">           
        </form>
    </div>

    <a href="..">Volver</a>
    <footer>
        <a href="./verPag.php?pagina=EligeFichero.php">Ver Código</a>
        <a href="./verPag.php?pagina=validaForm.php">Ver Código de la validación</a>
    </footer>
</body>
</html>
