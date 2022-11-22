<?php
    //Cambiar el entrenador de Francia por Zidane
    // LEer el documento cargando el DOM

$dom = new DOMDocument();
$dom->load('mundial.xml');

$raiz= $dom->childNodes[0];
//$raiz->childNodes[1]->childNodes[1]->nodeValue;

    //Buscar la etiqueta nombre que tenga el valor Francia 

    foreach ($raiz->childNodes as $elementos) {
        if ($elementos->nodeType ==1) {
            foreach ($elementos->childNodes as $datos) {
                if ($datos->nodeType==1 && $datos->nodeValue=="Dechams"){
                    $nuevo=$dom->createElement("Entrenador","Zidane");
                    $elementos->replaceChild($nuevo,$datos);
                }
            }
        }
    }
    //Cambiar el value por Zidane

    //Salvar el documento
    if ($dom->save('mundial.xml')) {
        echo "Todo bien";
    }else{
        echo "Fatal";
    }
?>
