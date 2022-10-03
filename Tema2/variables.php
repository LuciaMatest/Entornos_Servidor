<h2>Valor y referencia</h2>
<?php
    $var=1;
    $var1=$var;
    echo $var . "<br>";
    echo $var1 . "<br>";
    $var1=$var1 + 1;
    echo $var . "<br>";
    echo $var1 . "<br>";

    echo "<br>";

    $var=1;
    $var1=&$var;
    echo $var . "<br>";
    echo $var1 . "<br>";
    $var1=$var1 + 1;
    echo $var . "<br>";
    echo $var1 . "<br>";
?>
<h2>Ambito de las variables</h2>
<?php
    $global =1;
    function cambio($global){
       // global $global
        $local = $global;
        echo "El valor de local es " . $local;
    }
    cambio($global);
    echo "<br>El valor de global es " . $global;

    echo "<h2>Variables Estáticas</h2>";

    //crear variables de funcion
    function crearCoches(){
        static $numeroVecesCreado=0;
        $numeroVecesCreado=$numeroVecesCreado + 1;
        echo "<br> Ha sido creado un coche";
        echo "<br> LLevo creados " . $numeroVecesCreado;
    }
    crearCoches();
    crearCoches();

    echo "<h2>Include</h2>";
    include_once("./prueba.html");
    
    echo "<h2>Constantes</h2>";
?>