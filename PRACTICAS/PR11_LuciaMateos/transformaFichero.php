<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>XML</title>
</head>
<body>
    <?php
        $array_datos = array();
        //Abrimos para leer el archivo
        if (($open = fopen('notas.csv', 'r')) !== FALSE) {
            while (($datos = fgetcsv($open, 0, ";")) !== FALSE) {
                array_push($array_datos, $datos);
            }
            fclose($open);
        }
    ?>
    <header>
        <h1>PR11</h1>
    </header>
    <main>
        <ul class="menú"><li><a href="#">XML</a></li></ul>
            <?php
                //Creamos nuevo documento
                $dom= new DOMDocument('1.0','utf-8');
                //Copia el arbol XML interno a un string 
                $dom->formatOutput = true;

                //Crea un nuevo nodo elemento
                $raiz = $dom->createElement('notas');
                //Añade un nuevo hijo al final de los hijos
                $dom->appendChild($raiz);

                //Recorremos la arrays creada del archivo csv
                foreach ($array_datos as $lista) {
                    $alumno = $raiz->appendChild($dom->createElement('alumnos'));
                    $alumno->appendChild($dom->createElement('nombre', $lista[0]));
                    $alumno->appendChild($dom->createElement('nota1', $lista[1]));
                    $alumno->appendChild($dom->createElement('nota2', $lista[2]));
                    $alumno->appendChild($dom->createElement('nota3', $lista[3]));
                }

                // guardamos el DOM en un documento
                if ($dom->save('notas.xml')) {
                    echo "Todo bien";
                }else{
                    echo "Fatal";
                }
            ?>
        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=transformaFichero.php">Código</a></li>
            <li><a href="../../index.html">Volver</a></li>
        </ul>
    </main>
</body>
</html>