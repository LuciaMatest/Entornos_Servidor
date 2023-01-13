<?php
require_once ('Persona2.php');

// $p1= new Persona('maria',21,'maria@gmail.com');
// // var_dump($p1);
// $p1->setNombre('pepe');
// // var_dump($p1);

// echo $p1;

// $p2= clone $p1;
// echo $p2;


// //Referencia
// $p2=$p1;
// $p1->setEdad(22);
// // echo $p2;


//diferenciar mismos valores en el mismo objeto
// if($p1==$p2){
//     echo "Tienen los mismos valores";
    
// }

// if($p1===$p2){
//     echo "Es el mismo";
// }

$p1= new Persona('maria',21,'maria@gmail.com');
echo $p1->edad;
echo "<br>";
$p1->edad=25;
echo $p1->edad;
echo "<br>";
echo $p1->__get('nombre');


$p2= new Persona('daniel',21,'daniel@gmail.com');
unset($p2);

echo "<br>";
echo Persona::$id;
echo Persona::elProximoId();

echo "<br>Propiedades que existen:<br>";
print_r(get_class_vars('Persona'));
print_r($p1->verVariables());

setcookie('objeto', serialize($p1));
var_dump(($_COOKIE['objeto']));
echo '<br>';
echo serialize($p1);
var_dump(unserialize($_COOKIE['objeto']));

?>
