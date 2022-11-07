<?php
    require("./validar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #boton {
            width: 150px;
            height: 25px;
        }
    </style>
    <title>Formulario</title>
</head>
<body>
    <?php
        echo '<link rel="stylesheet" href="../../style.css">';
    ?>
    <header>
        <h1>PR08</h1>
    </header>
    <main>
        <ul class="menú">
            <li><a href="#">Formulario de registro</a></li>
        </ul>
        <!-- <h2>Formulario de registro</h2> -->
        <?php
        if (verificar()){
            imprimirInfo();
        }else{
        ?>
        <form action="./index.php" method="post" enctype="multipart/form-data">
            <p>
                <!-- NOMBRE OBLIGATORIO -->
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
                <!-- NOMBRE OPCIONAL -->
                <label for="idNombreOp">Alfabetico Opcional</label>
                <input type="text" name="nombreOp" id="idNombreOp" placeholder="Nombre" 
                value="<?
                    if (enviado() && !vacio("nombreOp")) {
                        echo $_REQUEST["nombreOp"];
                    }
                ?>">
            </p>
            <p>
                <!-- APELLIDO OBLIGATORIO -->
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
                <!-- APELLIDO OPCIONAL -->
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
                <!-- FECHA OBLIGATORIA -->
                <label for="idFecha">Fecha</label>
                <input type="date" name="fecha" id="idFecha" placeholder="dd/mm/aaaa"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("fecha")) {
                        echo $_REQUEST["fecha"];
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
                <!-- FECHA OPCIONAL -->
                <label for="idFechaOp">Fecha Opcional</label>
                <input type="date" name="fecha2" id="idFechaOp" placeholder="dd/mm/aaaa"
                >
            </p>
            <p>
                <!-- BOTONES OBLIGATORIOS -->
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
                <!-- OPCIONES -->
                <label for="idCurso">Elige una opción:</label>

                <select name="cursos" id="idCurso" 
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("cursos")) {
                        echo $_REQUEST["cursos"];
                    }
                ?>">
                    <option value="0">Seleccione</option>
                    <option value="1"
                    <?php
                    if(enviado() && existe('cursos') && $_REQUEST['cursos']==1){
                        ?>
                            selected
                        <?
                    }?>>DWES</option>
                    <option value="2"
                    <?php
                    if(enviado() && existe('cursos') && $_REQUEST['cursos']==2){
                        ?>
                            selected
                        <?
                    }?>>DWEC</option>
                    <option value="3"
                    <?php
                    if(enviado() && existe('cursos') && $_REQUEST['cursos']==3){
                        ?>
                            selected
                        <?
                    }?>>DIW</option>
                    <option value="4"
                    <?php
                    if(enviado() && existe('cursos') && $_REQUEST['cursos']==4){
                        ?>
                            selected
                        <?
                    }?>>DAW</option>
                    <option value="5"
                    <?php
                    if(enviado() && existe('cursos') && $_REQUEST['cursos']==5){
                        ?>
                            selected
                        <?
                    }?>>EIE</option>
                </select>
                <?php
                    if(existe('cursos') && $_REQUEST['cursos']==0){
                        echo "<p style='color: red'> Seleccione una opción</p>";
                    }
                ?>
            </p>
            <p>
                <!-- CHECK OBLIGATORIOS DE 1 A 3 -->
                <label>Elige al menos 1 y maximo 3:</label><br>
                <input type="checkbox" name="check[]" id="idCheck1" value="Check 1"
                <?php
                    if(enviado() && existe("check") && in_array("Check 1", $_REQUEST["check"]))
                    echo "checked";
                ?>>
                <label for="idCheck1">Check 1</label>
                <input type="checkbox" id="idCheck2" name="check[]" value="Check 2"
                <?php
                    if(enviado() && existe('check') && in_array("Check 2",$_REQUEST['check'])){
                        echo "checked";
                    }
                ?>>
                <label for="idCheck2">Check 2</label>
                <input type="checkbox" id="idCheck3" name="check[]" value="Check 3"
                <?php
                    if(enviado() && existe('check') && in_array("Check 3",$_REQUEST['check'])){
                        echo "checked";
                    }
                ?>>
                <label for="idCheck3">Check 3</label>
                <input type="checkbox" id="idCheck4" name="check[]" value="Check 4"
                <?php
                    if(enviado() && existe('check') && in_array("Check 4",$_REQUEST['check'])){
                        echo "checked";
                    }
                ?>>
                <label for="idCheck4">Check 4</label>
                <input type="checkbox" id="idCheck5" name="check[]" value="Check 5"
                <?php
                    if(enviado() && existe('check') && in_array("Check 5",$_REQUEST['check'])){
                        echo "checked";
                    }
                ?>>
                <label for="idCheck5">Check 5</label>
                <input type="checkbox" id="idCheck6" name="check[]" value="Check 6"
                <?php
                    if(enviado() && existe('check') && in_array("Check 6",$_REQUEST['check'])){
                        echo "checked";
                    }
                ?>>
                <label for="idCheck6">Check 6</label>

                <!-- Comprobar que se seleccionan de 1 a 3 opciones -->
                <?php
                    if (!existe('check') && enviado()) {
                        ?>
                            <span style="color: red;">Elige 1 opcion como minimo</span>
                        <?
                    }elseif (selecciona('check')){
                        ?>
                            <span style="color: red;">Elige menos de 3 opciones</span>
                        <?
                    }
                ?>
            </p>
            <p>
                <!-- TELÉFONO NUMERICO OBLIGATORIO -->
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
                    if (enviado()) {
                        if (vacio("telefono")) {
                            ?>
                                <span style="color:red"> <-- Debe introducir un teléfono!!</span>
                            <?
                        } else if(!is_numeric( $_REQUEST["telefono"])){
                            ?>
                                <span style="color:red"> <-- Debe introducir un número</span>
                            <?
                        } else if (!cantidadDigitos("telefono")) {
                            ?>
                                <span style="color:red"> <-- Número erroneo, verifique</span>
                            <?
                        }
                    }
                ?>
            </p>
            <p>
                <!-- EMAIL -->
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
                <!-- CONTRASEÑA -->
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
                <!-- SUBIR ARCHIVO -->
                <label for="idSubir">Subir documento</label>
                <input type="file" name="archivo" id="idSubir">
                
            </p>
            <!-- BOTÓN Y VALIDACIÓN -->
            <input type="submit" value="Enviar" name="enviar" id="boton" class="validarBtn">
        </form>
        <?php
        }
        ?>
        <ul class="menú">
            <li><a href="codigoprincipal.php" class="validarBtn">Código principal</a></li>
            <li><a href="codigovalidar.php" class="validarBtn">Código funciones</a></li>
            <li><a href="../../index.html">Volver</a></li></ul>
    </main>
</body>
</html>