<?
// $variable = (int)$_GET["filas"];
$a = 5;
for ($i=1; $i <= $a; $i++) { 
    for ($j=1; $j <= $a - $i; $j++) { 
        echo '&nbsp;&nbsp;';
    }
    for ($h=1; $h <= 2*$i - 1; $h++) { 
        echo '*';
    }
    echo '<br>';
}