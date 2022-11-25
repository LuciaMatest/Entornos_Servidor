<?
    //Creamos un fichero donde meter toda la información
    $dom= new DOMDocument('1.0','utf-8');

    $raiz= $dom->createElement("Registro");
    $dom->appendChild($raiz);

    //Añadimos un equipo y sus hijos
    $visitas= $raiz->appendChild($dom->createElement("Visitantes"));
    $visitas->appendChild($dom->createElement("IP"));
    $visitas->appendChild($dom->createElement("Veces:"));
    $visitas->appendChild($dom->createElement("Fecha:"));


    // guardamos el DOM en un documento
    if ($dom->save('registro.xml')) {
        echo "Todo bien";
    }else{
        echo "Fatal";
    }
    // //a
    // echo 'Muestra la dirección IP del equipo desde el que estás accediendo: ';
    // echo '<br>';
    // echo $_SERVER['REMOTE_ADDR'];
    // echo '<br>'; 

    // //b
    // echo 'El número de visitas desde cada dirección IP: ';
    // echo '<br>';
    
    // //c
    // echo 'Muestra la fecha de la última visita formateada en: dia en letra(dd), mes en letra(aaaa) hh:mm:ss uso Horario: ';
    // echo '<br>';
    // date_default_timezone_set('Europe/Madrid');
    // echo date('r');

?>