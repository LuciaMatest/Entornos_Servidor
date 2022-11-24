<?php
    require('validar.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>tabla notas</title>
</head>

<body>
    <header>
        <h1>PR11</h1>
    </header>
    <main>
        <ul class="menú"><li><a href="#">XML - Editar notas</a></li></ul>
        <?php
            //Interpreta un fichero XML en un objeto 
            $notas = simplexml_load_file('notas.xml');
            //Encuentra los hijos del nodo dado, 
            $alumnos= $notas->children()[intval($_REQUEST['indice'])];

            if (verificar()){
                $alumnos->nota1 = $_REQUEST['nota1'];
                $alumnos->nota2 = $_REQUEST['nota2'];
                $alumnos->nota3 = $_REQUEST['nota3'];

                // Retorna un string XML correcto basado en un elemento SimpleXML 
                $notas->asXML('notas.xml');

                header('Location: ./leeFicheroXML.php');
                exit();
            }else{ 
        ?>
        <form action="./editaFichero.php" method="post">
            <!-- <?echo '<pre>',print_r($array_datos),'</pre>'?> -->
            <!-- Nos ayuda a guardar la nueva informacion -->
            <input type="hidden" name="indice" value="<?php
                    echo $_REQUEST['indice'];
            ?>">
            <p>
                <label for="idNombre">Nombre:</label><?php 
                echo "<p>" . $notas->children()[intval($_REQUEST['indice'])]->children()[0] . "</p>";
                ?>
            </p>

                <label for="idNota1">Nota 1:</label>
                <input type="text" name="nota1" id="idNota1" value="<?php
                    echo  $notas->children()[intval($_REQUEST['indice'])]->children()[1];
                ?>">
                <?
                    //comprobar que no este vacio y es correcto, si lo está pongo un error
                    if (enviado()){
                        if (vacio("nota1")) {
                            ?>
                            <span style="color:brown"> Nota no introducida, revise</span>
                            <?
                        } elseif (!patronNotas('nota1')) {
                            ?>
                            <span style="color:brown"> Nota incorrecta, revise</span>
                            <?
                        }
                    } 
                ?>

                <label for="idNota2">Nota 2:</label>
                <input type="text" name="nota2" id="idNota2" value="<?php
                    echo  $notas->children()[intval($_REQUEST['indice'])]->children()[2];
                ?>">
                <?
                    //comprobar que no este vacio y es correcto, si lo está pongo un error
                    if (enviado()){
                        if (vacio("nota2")) {
                            ?>
                            <span style="color:brown"> Nota no introducida, revise</span>
                            <?
                        } elseif (!patronNotas('nota2')) {
                            ?>
                            <span style="color:brown"> Nota incorrecta, revise</span>
                            <?
                        }
                    } 
                ?>

                <label for="idNota3">Nota 3:</label>
                <input type="text" name="nota3" id="idNota3" value="<?php
                   echo  $notas->children()[intval($_REQUEST['indice'])]->children()[3];
                ?>">
                <?
                    //comprobar que no este vacio y es correcto, si lo está pongo un error
                    if (enviado()){
                        if (vacio("nota3")) {
                            ?>
                            <span style="color:brown"> Nota no introducida, revise</span>
                            <?
                        } elseif (!patronNotas('nota3')) {
                            ?>
                            <span style="color:brown"> Nota incorrecta, revise</span>
                            <?
                        }
                    } 
                ?>
            </p>
            
            <input type="submit" value="Guardar" name="guardar">
        </form>
        <?php
        }
        ?>
        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=editaFichero.php">Código edición</a></li>

            <li><a href="./tablaFichero.php">Volver</a></li>
        </ul>
    </main>
</body>

</html>