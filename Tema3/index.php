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