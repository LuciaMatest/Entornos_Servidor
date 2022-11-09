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
        <?php
        if (verificar()){
            mostrar();
        }else{
        ?>
        <form action="./formulario.php" method="post" enctype="multipart/form-data">
            <p>
                <!-- NOMBRE OBLIGATORIO -->
                <label for="idNombre">Nombre:</label>
                <input type="text" name="nombre" id="idNombre" placeholder="Nombre"
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
                            <span style="color:brown"> Introduce nombre</span>
                            <?
                        } elseif (!patronNombre()) {
                            ?>
                            <span style="color:brown"> Nombre incorrecto, revise</span>
                            <?
                        }
                    }
                ?>
            </p>
            <p>
                <!-- APELLIDO OBLIGATORIO -->
                <label for="idApellido">Apellidos:</label>
                <input type="text" name="apellido" id="idApellido" placeholder="Apellido"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("apellido")) {
                        echo $_REQUEST["apellido"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y que tenga dos apellidos con espacio entre ellos, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("apellido")){
                            ?>
                            <span style="color:brown"> Introduce apellidos</span>
                            <?
                        } elseif (!patronApellido()) {
                            ?>
                            <span style="color:brown"> Apellidos no válidos, revise</span>
                            <?
                        }
                    }
                ?>
            </p>
            <p>
                <!-- FECHA OBLIGATORIA -->
                <label for="idFecha">Fecha</label>
                <input type="text" name="fecha" id="idFecha" placeholder="dd/mm/aaaa"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("fecha")) {
                        echo $_REQUEST["fecha"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio, que sea fecha correcta y que sea mayor de edad, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("fecha")){
                            ?>
                            <span style="color:brown"> Introduce fecha</span>
                            <?
                        } elseif (!patronFecha()) {
                            ?>
                            <span style="color:brown"> Fecha no válida, revise</span>
                            <?
                        } elseif (!mayoriaEdad()) {
                            ?>
                            <span style="color:brown"> No es mayor de edad</span>
                            <?
                        }
                    }
                ?>
            </p>
            <p>
                <!-- DNI -->
                <label for="idDNI">DNI:</label>
                <input type="text" name="dni" id="idDNI" placeholder="DNI/NIF"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("dni")) {
                        echo $_REQUEST["dni"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y es correcto, si lo está pongo un error
                    if (enviado()){
                        if (vacio("dni") && !patronDNI()) {
                            ?>
                            <span style="color:brown"> DNI no válido, revise</span>
                            <?
                        }
                    } 
                ?>
            </p>
            <p>
                <!-- EMAIL -->
                <label for="idEmail">Correo electrónico:</label>
                <input type="text" name="email" id="idEmail"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("email")) {
                        echo $_REQUEST["email"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("email")){
                            ?>
                            <span style="color:brown"> Introduce email</span>
                            <?
                        } elseif (!patronEmail()) {
                            ?>
                            <span style="color:brown"> Email no válida, revise</span>
                            <?
                        }
                    }
                ?>
            </p>
            <!-- BOTÓN Y VALIDACIÓN -->
            <input type="submit" value="Enviar" name="enviar" id="boton">
        </form>
        <?php
        }
        ?>
        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=formulario.php">Código principal</a></li>
            <li><a href="verCodigo.php?fichero=validar.php">Código funciones</a></li>

            
            <li><a href="../../index.html">Volver</a></li></ul>
    </main>
</body>
</html>