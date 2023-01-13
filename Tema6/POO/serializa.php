<?php
require('Persona2.php');

echo $_GET['objeto'];
var_dump(unserialize($_GET['objeto']));
?>