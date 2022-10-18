<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibe</title>
</head>
<body>
    <?php
        echo "El nombre es " . $_REQUEST['nombre'];
        echo "<br><br>";
        echo "Contraseña " . $_REQUEST['pass'];
        echo "<br><br>";
        if (isset($_REQUEST['genero'])) {   
            echo "Género " . $_REQUEST['genero'];
        }else {
            echo "Género no binario";
        }
        echo "<br><br>";
        echo "Las asignaturas: ";
        if (isset($_REQUEST['asignaturas'])) {        
            foreach ($_REQUEST['asignaturas'] as $asig) {
                echo "<br>-". $asig;
            }
        }else {
            echo "<br>-No hay";
        }
        
        echo "<br><br>";
        if ($_REQUEST['curso']==0) {
            echo "No has seleccionado nada";
        }else {
            echo "Curso " . $_REQUEST['curso'];
        }
        
        echo "<br><br>";
        
        print_r($_FILES);
        echo "<br><br>";

        $ubi="var/www/html/Entornos_Servidor/Tema3/formularios.php";

        if (move_uploaded_file($_FILES['fichero']['tmp_name'],$ubi)) {
            echo "Se movió el fichero a ". $ubi;
        }else {
            echo "Error";
        }
    ?>
</body>
</html>