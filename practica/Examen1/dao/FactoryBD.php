<?   
    class FactoryBD{

        public static function ejecuta($sql,$datos){
            try {
                //Los datos deben venir siempre como un array
                $con= new PDO('mysql:host='. $_SERVER['SERVER_ADDR']. ';dbname=' .BBDD,USER,PASS);
                $preparada= $con->prepare($sql);
                $preparada->execute($datos);

            } catch (Exception $ex) {
                //Si falla en la consulta devuelve nulo
                $preparada=null;
                echo $ex;
            }finally{
                //Cerramos la conexión
                unset($con);
                //Devolvemos la consulta
                return $preparada;
            }
        }

    }
?>