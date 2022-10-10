<?
$a = 5;
for ($i=1; $i <= $a; $i++) { 
    for ($j=1; $j <= ($a - $i); $j++) { 
        echo "&nbsp";
    }
    for ($h=1; $h <= ($a*2) - 1; $h++) { 
        echo "*";
    }
    echo "<br>";
}