<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen 1</title>
</head>
<body>
    <?php
        //Creamos nuevo documento
       $dom= new DOMDocument('1.0','utf-8');

       //Copia el arbol XML interno a un string 
       $dom->formatOutput=true;

       //Creamos elementos
       $raiz=$dom->createElement("registro_visistas");
       $dom->appendChild($raiz);

       //Guardamos el DOM en un documento
       $dom->save('registro.xml');
    ?>
    <?
       //Interpreta un fichero XML en un objeto 
       $registro=simplexml_load_file('registro.xml');

       //Recorrido si existe o no 
       foreach ($raiz as $visitante) {
            if ($visitante->ip==$_SERVER['REMOTE_ADDR']) {
                $visitante->veces=intval($visitante->veces);
                $visitante->fecha=date("D, j, M, Y, H:i:s +u", strtotime('now'));
            }else{
                $visitante = $registro->addChild("Registro");
                $visitante->addChild('IP:', $_SERVER['REMOTE_ADDR']);
                $visitante->addChild('Veces:', "0");
                $visitante->addChild('Fecha:', date("D, j, M, Y, H:i:s +u", strtotime('now')));
            }
       }


       foreach ($registro as $visitas) {
            echo "<p><b>IP: </b>" . $visitas->ip ; 
            echo "<b>Veces: </b>" . $visitas->veces;
            echo "<b>Fecha: </b>" . $visitas->fecha . "</p>";
       }

       $registro->asXML('registro.xml');
    ?>
    <a href="verCodigo.php?fichero=Examen1.php">Código</a>
</body>
</html>