<?php

$cadena = 'Hoy hace muy buen dia y hay nubes';
//El patrón va dentro de las barras
$patron ="/hace/";

echo"<br> Cadena: ".$cadena." y patron:".$patron. "Match ".preg_match($patron,$cadena);


$patron ="/ha./";
echo"<br> Cadena: ".$cadena." y patron:".$patron. "Match ".preg_match($patron,$cadena);



$patron = '/ha.\s/';
echo"<br> Cadena: ".$cadena." y patron:".$patron. "Match ".preg_match($patron,$cadena);


//hoy o hay
$patron = '/h[o|a]y/';
echo"<br> Cadena: ".$cadena." y patron:".$patron. "Match ".preg_match($patron,$cadena);

$mes = 'Noviembre';
$mes1 = 'Novembera';
$mes2 = 'aNov';


//$ al final para marcar que esl el final de la frase   
$patron = '/^Nov.[.|ember|iembre]$/';
echo"<br> Cadena: ".$mes." y patron:".$patron. "Match ".preg_match($patron,$mes);
echo"<br> Cadena: ".$mes1." y patron:".$patron. "Match ".preg_match($patron,$mes1);
echo"<br> Cadena: ".$mes2." y patron:".$patron. "Match ".preg_match($patron,$mes2);

$patron = '/log[0-9]?.log/';
$cadena ='log.log';
$cadena1='log1.log';
$cadena2='log125.log';
echo"<br> Cadena: ".$cadena." y patron:".$patron. "Match ".preg_match($patron,$cadena);
echo"<br> Cadena: ".$cadena1." y patron:".$patron. "Match ".preg_match($patron,$cadena1);
echo"<br> Cadena: ".$cadena2." y patron:".$patron. "Match ".preg_match($patron,$cadena2);

//IBAN valido
//pais 2 letras 4 números entidad 4 numeros oficina 2 control 10 cuenta
$patron = '/^[A-Z]{2}[0-9]{2}(\s)?[0-9]{4}(\s)?[0-9]{4}(\s)?[0-9]{2}(\s)?[0-9]{10}$/';
$cadena ='ES6612100418401234567891';
$cadena2 = 'ES66 1210 0418 40 1234567891';
echo"<br> Cadena: ".$cadena." y patron:".$patron. "Match ".preg_match($patron,$cadena);
echo"<br> Cadena: ".$cadena2." y patron:".$patron. "Match ".preg_match($patron,$cadena2);
$patron='/^[0-9]{1,3}$/';
$cadena=49;
echo"<br> Cadena: ".$cadena." y patron:".$patron. "Match ".preg_match($patron,$cadena);
$cadena=4900;
echo"<br> Cadena: ".$cadena." y patron:".$patron. "Match ".preg_match($patron,$cadena);


// \d numero y \D letra
$cadena='\d';
//Match con <html> <h3> <a> </html> </h3> 
$patron='/^<\/?\D+\d*>/';

$cadena = '<html><a></a></html>';
echo"<br> Cadena: ".str_replace('<','&lt',$cadena)." y patron:".$patron. "Match ".preg_match($patron,$cadena);
preg_match_all($patron,$cadena,$array);


$patron='/^<\/?[a-z]+[0-9]?>/';

$cadena = '<html>Dentro de una html</html><a>Dentro del enlace</a><h1>Dentro de un h1</h1>';
echo"<br> Cadena: ".$cadena." y patron:".$patron. "Match ".preg_match($patron,$cadena);

echo "<br>Array de coincidencias";
preg_match_all($patron,$cadena,$array);
foreach ($array[0] as $value) {
    echo str_replace('<', '&lt',$value).'<br>';
}

$patron='/<[a-z]+[0-9]?>(.*)<\/[a-z]+[0-9]?>/';
$cadena='<html>Dentro de una html</html><a>Dentro del enlace</a><h1>Dentro de un h1</h1>';
preg_match_all($patron,$cadena,$array);
echo "Dentro de etiqueta";



//Expresiones regulares en arrays

$lista = array('Maria','Criado','25','Zamora','calle Requejo 25','453');
$patron = '/^\d{1,3}$/';
$numeros=preg_grep($patron,$lista);
print_r($numeros);

$sustituir = 'numero';
$cambiado=preg_replace($patron,$sustituir,$lista);
print_r($cambiado);


// Coincidencias Basicas
// .       - Cualquier Caracter, excepto nueva linea
// \d      - Cualquier Digitos (0-9)
// \D      - No es un Digito (0-9)
// \w      - Caracter de Palabra (a-z, A-Z, 0-9, _)
// \W      - No es un Caracter de Palabra.
// \s      - Espacios de cualquier tipo. (espacio, tab, nueva linea)
// \S      - No es un Espacio, Tab o nueva linea.

// Limites
// \b      - Limite de Palabra
// \B      - No es un Limite de Palabra
// ^       - Inicio de una cadena de texto
// $       - Final de una cadena de texto

// Cuantificadores:
// *       - 0 o Más
// +       - 1 o Más
// ?       - 0 o Uno
// {3}     - Numero Exacto
// {3,4}   - Rango de Numeros (Minimo, Maximo)

// Conjuntos de Caracteres
// []      - Caracteres dentro de los brackets
// [^ ]    - Caracteres que NO ESTAN dentro de los brackets

// Grupos
// ( )     - Grupo
// |       - Uno u otro










?>