<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            
        }
    </style>
</head>
<body>
    <h1>Array multidimensional y asociativo</h1>
    <h2>Liga</h2>
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
        
        //tabla fila nombres equipos 
        echo("<tr><th>Equipos</th>");
        $equipos = array();
        foreach ($liga as $local => $equipo) {
            echo("<th>&nbsp;" .$local. "&nbsp;</th>");
            array_push($equipos, $local);
        }
        echo("</tr>");
        
        //tabla columna nombres equipos
        foreach ($liga as $local => $visitante) {
            $i=0;
            echo("<tr><th>&nbsp;" .$local. "&nbsp;</th>");
            //espacio para los puntos
            foreach ($visitante as $equipo => $puntos) {
                if ($local==$equipos[$i++]) {
                    echo("<td>&nbsp;</td>");
                }
                echo("<td>");
                //visualizar puntos de cada partido
                foreach ($puntos as $key => $value) {
                    //separa el restultado del resto de datos
                    if($key == "Resultado"){
                        echo("<p>&nbsp;" .$value. "&nbsp;</p>");
                    }
                    else{                          
                        echo("&nbsp;".$value);                   
                    }
                }
                echo("</td>");
            }
            echo("</tr>");
        }
        ?>
    </table>
    <table>
    <h2>Clasificación</h2>
    <?php
        // $marcador = array();
        // foreach ($equipos as $key => $value) {
        //     $marcador [$value] = array("Puntos" => 0, "Goles a favor" => 0, "Goles en contra" => 0);
        // }
        $marcador=array(
            "Zamora" => array(
                "Puntos"=>0, "Goles a favor"=>0, "Goles en contra"=>0
            ),
            "Salamanca" => array(
                "Puntos"=>0, "Goles a favor"=>0, "Goles en contra"=>0
            ),
            "Avila" => array(
                "Puntos"=>0, "Goles a favor"=>0, "Goles en contra"=>0
            ),
            "Valladolid" => array(
                "Puntos"=>0, "Goles a favor"=>0, "Goles en contra"=>0
            ),

        );

        echo "<table border=1><tr>";
        echo "<th>Equipos</th>";
        echo "<th>Puntos</th>";
        echo "<th>Goles a favor</th>";
        echo "<th>Goles en contra</th></tr>";

        foreach ($liga as $local => $partidos) {
            foreach ($partidos as $visitante => $resultado) {    
                //asignamos variables a los goles y separamos resultado de la matriz
                list($favor,$contra) = explode("-", $resultado["Resultado"]);

                //sumar todos los goles pasando por toda la matriz
                $marcador[$local]["Goles a favor"]+=$favor;
                $marcador[$visitante]["Goles en contra"]+=$favor;

                $marcador[$visitante]["Goles a favor"]+=$contra;
                $marcador[$local]["Goles en contra"]+=$contra;
                
                //por partido ganado se sumará 3 puntos y por partido empatado 1.
                if ($favor>$contra){
                    $marcador[$local]["Puntos"]+=3;
                }elseif ($favor==$contra) {
                    $marcador[$local]["Puntos"]+=1;                
                    $marcador[$visitante]["Puntos"]+=1;                
                }else {
                    $marcador[$visitante]["Puntos"]+=3; 
                }
            }
        }

        //visualizar clasificacion
        foreach ($marcador as $key => $resultado) {
            echo "<tr><th>" . $key . "</th>";
            foreach ($resultado as $value) {
              echo "<td>". $value . "</td>" ; 
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>

