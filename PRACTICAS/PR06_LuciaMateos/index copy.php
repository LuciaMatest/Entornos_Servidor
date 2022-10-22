<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaLiga</title>
</head>
<body>
    <?php
        $liga =
        array(
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

        echo "<table border='1'><tr><th>Equipos</th>";
        $equiposLocales=array();       
        $equiposVisitantes=array();        

        foreach ($liga as $locales => $equipo) {
            echo "<th>" . $locales . "</th>"; 
            array_push($equiposLocales, $locales);
        }

        echo "</tr>";

        foreach ($liga as $locales => $visitantes) {
            $i=0;
            echo "<tr><td>" . $locales . "</td>";
            foreach ($visitantes as $equipo => $dato) {
                if ($locales==$equiposLocales[$i++]) {
                    echo "<td>&nbsp;</td>";
                } 
                echo "<td>";
                foreach ($dato as $clave => $valor) {
                    echo "<p>" . $valor . "</p>"; 
                        
                }
                echo "</td>";
            }
            echo "</tr>";
        } 

        echo "</table><br><br>";

        $clasificacion=array(
            "Zamora" => array(
                "Puntos"=>0, "GolesFavor"=>0, "GolesContra"=>0
            ),
            "Salamanca" => array(
                "Puntos"=>0, "GolesFavor"=>0, "GolesContra"=>0
            ),
            "Avila" => array(
                "Puntos"=>0, "GolesFavor"=>0, "GolesContra"=>0
            ),
            "Valladolid" => array(
                "Puntos"=>0, "GolesFavor"=>0, "GolesContra"=>0
            ),

        );

        echo "<table border=1><tr>";
        echo "<th>Equipos</th>";
        echo "<th>Puntos</th>";
        echo "<th>Goles a favor</th>";
        echo "<th>Goles en contra</th></tr>";

        foreach ($liga as $locales => $partidos) {
            foreach ($partidos as $visitante => $resultado) {               
                list($gf,$gc)=explode("-", $resultado["Resultado"]);
                $clasificacion[$locales]["GolesFavor"]+=$gf;
                $clasificacion[$visitante]["GolesContra"]+=$gf;
                $clasificacion[$locales]["GolesContra"]+=$gc;
                $clasificacion[$visitante]["GolesFavor"]+=$gc;
                if ($gf>$gc){
                    $clasificacion[$locales]["Puntos"]+=3;
                }elseif ($gf==$gc) {
                    $clasificacion[$locales]["Puntos"]+=1;                
                    $clasificacion[$visitante]["Puntos"]+=1;                
                }else {
                    $clasificacion[$visitante]["Puntos"]+=3;
                    
                }
            }
        }

        foreach ($clasificacion as $local => $resultado) {
            echo "<tr><td>" . $local . "</td>";
            foreach ($resultado as $valor) {
              echo "<td>". $valor . "</td>" ; 
            }
            echo "</tr>";
        } 
    ?>
</body>
</html>