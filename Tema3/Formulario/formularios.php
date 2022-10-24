<?php
    require("./validarformulario.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="./formularios.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="idNombre">Nombre</label>
            <input type="text" name="nombre" id="idNombre" placeholder="Nombre" 
            value="<?
                if (enviado() && !vacio("nombre")) {
                    echo $_REQUEST["nombre"];
                }
            ?>">
            <?
                //comprobar que no este vacio, si lo está pongo un error
                if (vacio("nombre") && enviado()){
                    ?>
                    <span style="color:red">Debe rellenar el nombre</span>
                    <?
                }
            ?>
        </p>
        <p>
            <label for="idContraseña">Contraseña</label>
            <input type="password" name="pass" id="idContraseña"
            value="<?
                if (enviado() && !vacio("pass")) {
                    echo $_REQUEST["pass"];
                }
            ?>">
            <?
                //comprobar que no este vacio, si lo está pongo un error
                if (vacio("pass") && enviado()){
                    ?>
                    <span style="color:red">Debe rellenar el nombre</span>
                    <?
                }
            ?>
        </p>
        <p>
            <label for="idMasculino">Hombre</label>
            <input type="radio" name="genero" id="idMasculino" value="masculino">
            <label for="idFemenino">Mujer</label>
            <input type="radio" name="genero" id="idFemenino" value="feminio">
            <?
                //comprobar que no este vacio, si lo está pongo un error
                if (vacio("genero") && enviado()){
                    ?>
                    <span style="color:red">Debe elegir género</span>
                    <?
                }
            ?>
        </p>
        <p><b>Asignaturas</b>
            <br>
            <label for="idDWES">Desarrollo web servidor</label>
            <input type="checkbox" name="asignaturas[]" id="idDWES" value="DWES">
            <br>
            <label for="idDWEC">Desarrollo web cliente</label>
            <input type="checkbox" name="asignaturas[]" id="idDWEC" value="DWEC">
            <br>
        </p>
        <p><b>Curso</b>
            <select name="curso" id="idCurso">
                <option value="0">Selecciona opción</option>
                <option value="1">Primero</option>
                <option value="2">Segundo</option>
            </select>
        </p>
        <p>
            <input type="file" name="fichero" id="idFichero">
        </p>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>