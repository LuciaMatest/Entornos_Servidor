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
    <?php
        if (primeraComprobación()){
            mostrar();
        }else{
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
                        echo "<option value='" . $ciclos . "'>" . $ciclos . "</option>";
                    }
                ?>
            </select>
            <?php
                //comprobación
                if (enviado()){
                    if ($_REQUEST['curso']=="no"){
                        ?>
                        <span style="color:brown"> No seleccionado</span>
                        <?                    
                    }
                }
            ?>
        <br>
        <input type="hidden" name="curso" value="<?php 
            if (enviado()) {
                $_REQUEST['curso'];
            }           
        ?>">
    
        <input type="submit" name="Enviado" value="Enviar">
    </form>
    <?php
        }
    ?>
</body>

</html>