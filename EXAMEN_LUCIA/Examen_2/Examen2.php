<?php
    require("./validar.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Examen - Lucia Mateos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <style>
        *,
        input {
            margin: 10px;
        }
    </style>
    <?php
    $array = array(
        "1DAM" => array("ENDE", "BD", "LM", "SI", "FOL"),
        "2DAM" => array("DI", "SGE", "ACDA", "EIE", "PSP"),
        "2DAW" => array("DWES", "DWEC", "DIW", "EIE")
    );
    ?>
    <form action="./Examen2.php" method="post">
        <label for="nombre">Nombre y apellidos:</label> <input type="text" name="nombre" id="nombre" 
        value="<?
            //Mantener el texto introducido en el campo de texto 
            if (enviado() && !vacio("nombre")) {
                echo $_REQUEST["nombre"];
            }
        ?>">
        <?
            //comprobar que no este vacio y que cumple los requisitos, si lo está pongo un error
            if (enviado()) {
                if (vacio("nombre")){
                    ?>
                    <span style="color:brown"> Introduce nombre y apellidos</span>
                    <?
                } elseif (!patronNombre()) {
                    ?>
                    <span style="color:brown"> Debe introducir Mmm Mmm Mmm</span>
                    <?
                }
            }
        ?>
        <br><label for="exp">Expediente</label> <input type="text" name="exp" id="exp" 
        value="<?
            //Mantener el texto introducido en el campo de texto 
            if (enviado() && !vacio("exp")) {
                echo $_REQUEST["exp"];
            }
        ?>">
        <?
            //comprobar que no este vacio y que cumple los requisitos, si lo está pongo un error
            if (enviado()) {
                if (vacio("exp")){
                    ?>
                    <span style="color:brown"> Introduce numero de expediente</span>
                    <?
                } elseif (!patronExpediente()) {
                    ?>
                    <span style="color:brown"> Debe escribir 00MMM/00</span>
                    <?
                }
            }
        ?>
        <br>
        <!-- OPCIONES -->
        <label for="curso">Curso:</label> 
        <select name="curso" id="curso">
            <option value="no">Selecione una opcion</option>
            <?php
                foreach ($array as $ciclos => $curso) {
                    if ($_REQUEST['curso'] == $ciclos){
                        echo "<option value='" . $ciclos . "' selected>" . $ciclos . " </option>";
                    } else {
                        echo "<option value='" . $ciclos . "'>" . $ciclos . " </option>";
                    }
                }
            ?>
            <?php
                //comprobación
                if ($_REQUEST['curso']=="no"){
                    ?>
                        <span style="color:brown"> No seleccionado </span>
                    <?                    
                }
                
            ?>
        </select>
        <br>
        <input type="hidden" name="curso" value="<?php 
            if (enviado()) {
                $_REQUEST["curso"];
            }           
        ?>">
        <?php
            //Si la primera comprobacion es correcta mostraremos la seleccion de los cursos que tiene cada ciclo
            if (primeraComprobación()) {
                echo "<p>Asignaturas:</p>";
                foreach ($array as $curso => $value) {
                    if ($curso==$_REQUEST['curso']){
                        //Creamos la checkbox donde almacenamos cada uno de los cursos
                        foreach ($value as $key) {
                            echo '<input type="checkbox" name="check[]" id="' . $key .'" value="' . $key .'">';
                            echo "<label for='" . $key . "'>" . $key . "</label>";
                        }
                    }
                }
            }
        ?>
        <input type="submit" name="Enviado" value="Enviar">
    </form>
</body>

</html>