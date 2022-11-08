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

// if (isset($_REQUEST['enviar'])) {
//     if (isset($_REQUEST['fichero'])) {
//         if(file_exists($_REQUEST['fichero'])){
//             //redirigir a otra pagina
//             header('Location: ./leer.php=fichero'.$_REQUEST['fichero']);
//             exit();
//         }
//     }
// }
?>