<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar formulario</title>
</head>
<body>
    <?php
        echo "<p>Nombre y apellidos: " . $_REQUEST['nombre'] . "</p>";
        echo "<p>Expediente: " . $_REQUEST['exp'] . "</p>";
        echo "<p>Curso: " . $_REQUEST['curso'] . "</p>";
        echo "<p>Asignaturas: " .$_REQUEST['asignaturas'] . "</p>" ;
    ?>
</body>
</html>