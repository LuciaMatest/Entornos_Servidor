<h2>Nave espacial</h2>
<?
$a = "a";
$b = "b";

var_dump($a<=>$b);
echo "<br>";
?>

<h2>Tipos de operadores</h2>
<?
$a = 5;
$b = 2;

var_dump($a & $b);
echo "<br>";
var_dump($a | $b);
echo "<br>";
var_dump($a << $b);
echo "<br>";
var_dump($a >> $b);
echo "<br>";
?>

<h2>Tomas de decision</h2>
<?
$a = 2;
switch ($a) {
    case 1:
        echo "es 1";
        break;
     case 2:
        echo "es 2";
        break;
    default:
        echo "es otro";
        break;
}
?>

<h2>Bucles</h2>
<?
//for
$b = 10;
for ($i=0; $i <= $b; $i++) { 
    echo "<br>" . $i;
    if ($i==5)
        break;
}
echo "<br>";
for ($i=0; $i <= $b; $i++) { 
    if ($i==5)
        continue;
    echo "<br>".$i;

}
//while
echo "<br>";
while ($a <= 10) {
    echo "<br>".$a;
    $a++;
}
//do 
echo "<br>";
$c = 4;
do {
    echo "<br>".$c;
    $c++;
} while ($c <= 10);
?>