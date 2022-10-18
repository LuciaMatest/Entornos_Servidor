<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style> -->
</head>
<body>
    <h1>Liga</h1>
    <table>
        <?php
        $liga = array(
            "Zamora" =>  array(
                "Salamanca" => array(
                    "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                ),
                "Avila" => array(
                    "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                ),
                "Valladolid" => array(
                    "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 1
                )
            ),
            "Salamanca" =>  array(
                "Zamora" => array(
                    "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                ),
                "Avila" => array(
                    "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                ),
                "Valladolid" => array(
                    "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 2, "Penalti" => 1
                )
            ),
            "Avila" =>  array(
                "Zamora" => array(
                    "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 2
                ),
                "Salamanca" => array(
                    "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 3, "Penalti" => 0
                ),
                "Valladolid" => array(
                    "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 0, "Penalti" => 1
                )
            ),
            "Valladolid" =>  array(
                "Zamora" => array(
                    "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                ),
                "Salamanca" => array(
                    "Resultado" => "3-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                ),
                "Avila" => array(
                    "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 2
                )
            ),
        );
        ?>
        <?php
            echo("<tr>");
            echo("<th>EQUIPOS</th>");
            //primera fila
            foreach ($liga as $key => $value) {
                echo("<th>&nbsp;" .$key. "&nbsp;</th>");
                
            }
            echo("</tr>");
            //columna
            $filas = 0;
            $colum = 0;
           
            foreach ($liga as $equipo => $valor) {
                echo("<tr>");
                echo("<th>&nbsp;" .$equipo. "&nbsp;</th>");
                foreach ($valor as $puntos => $equipo) {
                    if ($filas==$colum) {
                        echo("<td></td>");
                    }
                    echo("<td>");
                    $colum++;
                    //puntos
                    foreach ($equipo as $key => $valor) {
                        echo("&nbsp;".$valor);
                    }
                    echo("</td>");
                }
                echo("</tr>");
                $colum = 0;
                $filas++;
            }
        ?>
    </table>
</body>
</html>