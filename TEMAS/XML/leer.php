<?php
$dom = new DOMDocument();
$dom->load('departamento.xml');

// el DOM coge todo, includo los espacios
echo "Fichero:<br>";

$raiz= $dom->childNodes[0];

echo "Raiz: " . $raiz->nodeName;
echo "<br><br>";
//Nº de hijos de la raiz
echo "Nº de hijos de la raiz(contando los textos: " . $raiz->childNodes->length;

echo "<br><br>";

//Recorrer los hijos
foreach ($raiz->childNodes as $elementos) {
    if ($elementos->nodeType ==1) {
        echo "Hijo: " . $elementos->nodeName . "<br>";
        foreach ($elementos->childNodes as $datos) {
            if ($datos->nodeType==1){
                echo $datos->nodeName . ": " . $datos->nodeValue . "<br>";
            }
        }
    }
}

?>