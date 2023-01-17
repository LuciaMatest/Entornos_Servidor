<?  
    
    class FactoryBD{

        public static function ejecuta($sql,$datos){
            try {
                //Los datos deben venir siempre como un array
                $con= new PDO('mysql:host='. $_SERVER['SERVER_ADDR']. ';dbname=' .BBDD,USER,PASS);
                $preparada= $con->prepare($sql);
                $preparada->execute($datos);

            } catch (Exception $ex) {
                //Si no va pues nulo
                $preparada=null;
                echo $ex;
            }finally{
                unset($con);
                return $preparada;
            }
        }
    }
?>