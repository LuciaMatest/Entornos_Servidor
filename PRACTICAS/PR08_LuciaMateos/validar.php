<?php
function vacio($nombre){
    if (empty($_REQUEST[$nombre])) {
        return true;
    }
    return false;
}

function enviado(){
    if (isset($_REQUEST['enviar']))
        return true;
    return false;
}

function existe($nombre){
    if (isset($_REQUEST[$nombre]))
        return true;
    return false;
}

function selecciona($nombre){
    if(isset($_REQUEST[$nombre]))
        if(count($_REQUEST[$nombre]) > 3){
            return true;
    }
    return false;
}

function cantidadDigitos($nombre){
    if(isset($_REQUEST[$nombre]))
        if(strlen($_REQUEST[$nombre]) == 9){
            return true;
    }
    return false;
}

function verificar(){
    if (enviado()) {
        if (!vacio("nombre") && !is_numeric($_REQUEST["nombre"])) {
            if (!vacio("apellido")) {
                if (!vacio("fecha")) {
                    if (existe("opcion") && $_REQUEST["opcion"]!=0) {
                        if (existe("check") && !selecciona("check")) {
                            if (!vacio("telefono")  && cantidadDigitos('telefono')) {
                                return true;
                            }
                        }
                    }
                }
            }
        }
    }
    return false;
}

function mostrar(){
    echo "<p>Alfabético: ". $_REQUEST["nombre"] . "</p>";

    if(isset($_REQUEST["nombreOp"])){
        echo "<p>Alfabético opcional: ". $_REQUEST["nombreOp"] ."</p>";
    }

    echo "<p>Alfanumérico: ". $_REQUEST["apellido"] . "</p>";

    if(isset($_REQUEST["apellidoOp"])){
        echo "<p>Alfanumérico opcional: ". $_REQUEST["apellidoOp"] . "</p>";
    }

    echo "<p>Fecha: ". $_REQUEST["fecha"] . "</p>";

    if(isset($_REQUEST["fechaOp"])){
        echo "<p>Fecha opcional: ". $_REQUEST["fechaOp"] . "</p>";
    }

    echo "<p>Elegiste la opción: ". $_REQUEST["opcion"] . "</p>";

    echo "<p>Seleccionaste: ". $_REQUEST["cursos"] . "</p>";

    echo "<p> Elegiste: ";
        foreach($_REQUEST["check"] as $valor){
            echo "->  $valor ";
        }
    echo "</p>";

    echo "<p>Teléfono: ". $_REQUEST["telefono"] . "</p>";

    echo "<p>Email: ". $_REQUEST["email"] . "</p>";

    echo "<p>Contraseña: ". $_REQUEST["contraseña"] . "</p>";

    echo "<p> Documento: ";
        echo $_FILES["archivo"]["name"];
    echo "</p>";
}
?>