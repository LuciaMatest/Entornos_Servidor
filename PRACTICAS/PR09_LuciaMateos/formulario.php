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
        echo '<link rel="stylesheet" href="./style.css">';
    ?>
    <header>
        <h1>PR09</h1>
    </header>
    <main>
        <ul class="menú">
            <li><a href="#">Formulario y expresiones regulares</a></li>
        </ul>
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
            <!-- BOTÓN Y VALIDACIÓN -->
            <input type="submit" value="Enviar" name="enviar" id="boton">
        </form>
        <ul class="menú">
            <!-- Codigos PHP
            <li><a href="codigoprincipal.php">Código principal</a></li>
            <li><a href="codigovalidar.php">Código funciones</a></li> -->

            <li><a href="../../index.html">Volver</a></li></ul>
    </main>
</body>
</html>