<?php
    require("./validar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Formulario</title>
</head>
<body>
    <h2>Formulario de registro</h2>
    <form action="./index.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="idNombre">Alfabetico</label>
            <input type="text" name="nombre" id="idNombre" placeholder="Nombre"
            value="<?
                //Mantener el texto introducido en el campo de texto 
                if (enviado() && !vacio("nombre")) {
                    echo $_REQUEST["nombre"];
                }
            ?>">
            <?
                //comprobar que no este vacio, si lo está pongo un error
                if (vacio("nombre") && enviado()){
                    ?>
                    <span style="color:red"> <-- Debe introducir un nombre!!</span>
                    <?
                }
            ?>
        </p>
        <p>
            <label for="idNombreOp">Alfabetico Opcional</label>
            <input type="text" name="nombreOp" id="idNombreOp" placeholder="Nombre" 
            value="<?
                if (enviado() && !vacio("nombreOp")) {
                    echo $_REQUEST["nombreOp"];
                }
            ?>">
        </p>
        <p>
            <label for="idApellido">Alfanumérico</label>
            <input type="text" name="apellido" id="idApellido" placeholder="Apellido"
            value="<?
                //Mantener el texto introducido en el campo de texto 
                if (enviado() && !vacio("apellido")) {
                    echo $_REQUEST["apellido"];
                }
            ?>">
            <?
                //comprobar que no este vacio, si lo está pongo un error
                if (vacio("apellido") && enviado()){
                    ?>
                    <span style="color:red"> <-- Debe introducir un apellido!!</span>
                    <?
                }
            ?>
        </p>
        <p>
            <label for="idApellidoOp">Alfanumérico Opcional</label>
            <input type="text" name="apellidoOp" id="idApellidoOp" placeholder="Apellido"
            value="<?
                //Mantener el texto introducido en el campo de texto 
                if (enviado() && !vacio("apellidoOp")) {
                    echo $_REQUEST["apellidoOp"];
                }
            ?>">
        </p>
        <p>
            <label for="idFecha">Fecha</label>
            <input type="date" name="fecha" id="idFecha" placeholder="dd/mm/aaaa"
            value="<?
                //Mantener el texto introducido en el campo de texto 
                if (enviado() && !vacio("apellidoOp")) {
                    echo $_REQUEST["apellidoOp"];
                }
            ?>">
            <?
                //comprobar que no este vacio, si lo está pongo un error
                if (vacio("fecha") && enviado()){
                    ?>
                    <span style="color:red"> <-- Debe introducir una fecha!!</span>
                    <?
                }
            ?>
        </p>
        <p>
            <label for="idFechaOp">Fecha Opcional</label>
            <input type="date" name="fecha" id="idFechaOp" placeholder="dd/mm/aaaa"
            >
        </p>
        <p>
            <label for="idRadio">Radio Obligatorio</label><br>
            <input type="radio" id="idRadio" name="opcion" value="Opción 1"
            <?
                if (enviado() && existe("opcion") && $_REQUEST["opcion"] == "Opción 1") {
                    echo"checked";
                }
            ?>>
            <label for="Opción 1">Opción 1</label>
            <input type="radio" id="idRadio" name="opcion" value="Opción 2"
            <?
                if (enviado() && existe("opcion") && $_REQUEST["opcion"] == "Opción 2") {
                    echo"checked";
                }
            ?>>
            <label for="Opción 2">Opción 2</label>
            <input type="radio" id="idRadio" name="opcion" value="Opción 3"
            <?
                if (enviado() && existe("opcion") && $_REQUEST["opcion"] == "Opción 3") {
                    echo"checked";
                }
            ?>>
            <label for="Opción 3">Opción 3</label>
        </p>
        <p>
            <label for="idCurso">Elige una opción:</label>

            <select name="cursos" id="idCurso">
                <option value="0">Seleccione</option>
                <option value="1">DWES</option>
                <option value="2">DWEC</option>
                <option value="3">DIW</option>
                <option value="4">DAW</option>
                <option value="5">EIE</option>
            </select> 
            <?php
                if(existe('cursos') && $_REQUEST['cursos']==0){
                    echo "<p style='color: red'> Seleccione una opción</p>";
                }
            ?>
        </p>
        <p>
            <label for="idCheck">Elige al menos 1 y maximo 3:</label><br>
            <input type="checkbox" id="idCheck" name="check" value="Check 1"
            <?php
                if(enviado() && existe('check') && in_array("Check 1",$_REQUEST['check'])){
                    echo "checked";
                }
            ?>>
            <label for="check">Check 1</label>
            <input type="checkbox" id="idCheck" name="check" value="Check 2"
            <?php
                if(enviado() && existe('check') && in_array("Check 2",$_REQUEST['check'])){
                    echo "checked";
                }
            ?>>
            <label for="check">Check 2</label>
            <input type="checkbox" id="idCheck" name="check" value="Check 3"
            <?php
                if(enviado() && existe('check') && in_array("Check 3",$_REQUEST['check'])){
                    echo "checked";
                }
            ?>>
            <label for="check">Check 3</label>
            <input type="checkbox" id="idCheck" name="check" value="Check 4"
            <?php
                if(enviado() && existe('check') && in_array("Check 4",$_REQUEST['check'])){
                    echo "checked";
                }
            ?>>
            <label for="check">Check 4</label>
            <input type="checkbox" id="idCheck" name="check" value="Check 5"
            <?php
                if(enviado() && existe('check') && in_array("Check 5",$_REQUEST['check'])){
                    echo "checked";
                }
            ?>>
            <label for="check">Check 5</label>
            <input type="checkbox" id="idCheck" name="check" value="Check 6"
            <?php
                if(enviado() && existe('check') && in_array("Check 6",$_REQUEST['check'])){
                    echo "checked";
                }
            ?>>
            <label for="check">Check 6</label>
        </p>
        <p>
            <label for="idTelefono">Nº de teléfono:</label>
            <input type="tel" name="telefono" id="idTelefono" placeholder="654987321"
            value="<?
                //Mantener el texto introducido en el campo de texto 
                if (enviado() && !vacio("telefono")) {
                    echo $_REQUEST["telefono"];
                }
            ?>">
            <?
                //comprobar que no este vacio, si lo está pongo un error
                if (vacio("telefono") && enviado()){
                    ?>
                    <span style="color:red"> <-- Debe introducir un teléfono!!</span>
                    <?
                }
            ?>
        </p>
        <p>
            <label for="idEmail">Email</label>
            <input type="email" name="email" id="idEmail"
            value="<?
                //Mantener el texto introducido en el campo de texto 
                if (enviado() && !vacio("email")) {
                    echo $_REQUEST["email"];
                }
            ?>">
            <?
                //comprobar que no este vacio, si lo está pongo un error
                if (vacio("email") && enviado()){
                    ?>
                    <span style="color:red"> <-- Debe introducir un email!!</span>
                    <?
                }
            ?>
        </p>
        <p>
            <label for="idContraseña">Contraseña</label>
            <input type="password" name="contraseña" id="idContraseña"
            value="<?
                //Mantener el texto introducido en el campo de texto 
                if (enviado() && !vacio("contraseña")) {
                    echo $_REQUEST["contraseña"];
                }
            ?>">
            <?
                //comprobar que no este vacio, si lo está pongo un error
                if (vacio("contraseña") && enviado()){
                    ?>
                    <span style="color:red"> <-- Debe introducir una contraseña!!</span>
                    <?
                }
            ?>
        </p>
        <p>
            <label for="idSubir">Subir documento</label>
            <input type="file" name="archivo" id="idSubir"
            value="<?
                //Mantener el texto introducido en el campo de texto 
                if (enviado() && !vacio("archivo")) {
                    echo $_REQUEST["archivo"];
                }
            ?>">
            <?
                //comprobar que no este vacio, si lo está pongo un error
                if (vacio("archivo") && enviado()){
                    ?>
                    <span style="color:red"> <-- Debe seleccionar un archivo!!</span>
                    <?
                }
            ?>
        </p>
        <input type="submit" value="Enviar" name="enviar" id="boton">
    </form>
</body>
</html>