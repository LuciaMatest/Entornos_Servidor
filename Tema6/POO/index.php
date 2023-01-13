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
echo $p1->__get('nombre');
echo $p1->__get('email');

$p1->edad=25;
echo $p1->edad;
echo Persona::$id;
$p2= new Persona('daniel',21,'daniel@gmail.com');
echo $p2;

echo Persona::elProximoId();

echo "<br>Propiedades que existen";
print_r(get_class_vars('Persona'));
?>