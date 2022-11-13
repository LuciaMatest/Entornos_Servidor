<?php
//Comprobaciones
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


//Patrones
function patronNombre(){
    $patron = '/\D{3,}$/';
    if (preg_match($patron, $_REQUEST['nombre'])==1) {
        return true;
    }
    return false;
}

function patronApellido(){
    $patron = '/\D{3,}\s\D{3,}/';
    if (preg_match($patron, $_REQUEST['apellido'])==1) {
        return true;
    }
    return false;
}

function patronFecha(){
    $patron = '/^([0-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/([0-9]{1,4})$/';
    if (preg_match($patron, $_REQUEST['fecha'])==1) {
        $partes = explode('/', $_REQUEST['fecha']);
        if (checkdate($partes[1],$partes[0],$partes[2])) {
            return true;
        }
    }
    return false;
}

function mayoriaEdad(){
    if (existe('fecha')){
        $fecha= DateTime::createFromFormat('d/m/Y', $_REQUEST['fecha']);
        $actual= new dateTime();
        $diferecia= $actual->diff($fecha);
        if ($diferecia->y >=18){
            return true;
        }
    }
    return false;
}

function patronDNI(){
    $patron = '/\d{8}[T|R|W|A|G|M|Y|F|P|D|X|B|N|J|Z|S|Q|V|H|L|C|K|E]$/';
    if (preg_match($patron, $_REQUEST['dni'])==1) {
        $letra = 'TRWAGMYFPDXBNJZSQVHLCKE';
        $numeros = substr($_REQUEST['dni'],0,8);
        $dni = $_REQUEST['dni'];
        if ($dni[8] == $letra[$numeros%23]){
            return true;
        }
    }
    return false;
}

function patronEmail(){
    $patron = '/^.{1,}@.{1,}\..{2,}/';
    if (preg_match($patron, $_REQUEST['email'])==1) {
        return true;
    }
    return false;
}

function patronContraseña(){
    $patron = '/^((?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$)(?=.*[;:\.,!¡\?¿@#\$%\^&\-_+=\(\)\[\]\{\}])).{8,20}$/';
    if(preg_match($patron, $_REQUEST['password']) == 1){
        return true;
    }
    return false;
}

function patronFichero(){
    $patron = '/^[^.]+\.(jpg|bmp|png)$/';
    if(preg_match($patron, $_FILES['fichero']['name'])==1){
        return true;
    }
    return false;
}

function subir(){
    $ruta = './jpg/'. $_FILES['fichero']['name'];
    move_uploaded_file($_FILES['fichero']['tmp_name'], $ruta);
}

//Verificar datos
function verificar(){
    if (enviado()){
        if (!vacio('nombre') && patronNombre()) {
            if (vacio('apelido') && patronApellido()) {
                if (!vacio('fecha') && patronFecha() && mayoriaEdad()) {
                    if (!vacio('dni') && patronDNI()) {
                        if (!vacio('email') && patronEmail()) {
                            if(!vacio("password") && patronContraseña("password")){
                                if(file_exists($_FILES['fichero']['tmp_name']) && patronFichero("fichero")){
                                    subir();
                                    return true;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return false;
}

//Mostrar los datos introducidos
function mostrar(){
    echo "<p>Nombre: ". $_REQUEST["nombre"] . "</p>";
    echo "<p>Apellidos: ". $_REQUEST["apellido"] . "</p>";
    echo "<p>Fecha: ". $_REQUEST["fecha"] . "</p>";
    echo "<p>DNI: ". $_REQUEST["dni"] . "</p>";
    echo "<p>Email: ". $_REQUEST["email"] . "</p>";
    echo "<p>Contraseña: ". $_REQUEST["password"] . "</p>";
    echo '<p>fichero: </p><img src="./jpg/'.$_FILES['fichero']['name'].'" width="300px">';
}
?>