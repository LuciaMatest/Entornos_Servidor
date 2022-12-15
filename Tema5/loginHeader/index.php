<?php
if(!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic Realm ="Contenido restringido"');
}

echo 'Mi pagina con derecho de admisión ';
?>