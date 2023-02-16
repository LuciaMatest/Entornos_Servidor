<?


Class FactoryBD{
    public static function ejecuta($sql,$datos){
        try{
            $con = new PDO("mysql:host=".HOST.";dbname=".BBDD,USER,PASS);
            $preparada = $con->prepare($sql);
            $preparada->execute($datos);       
        }catch(Exception $e){
            $preparada = null;
            echo $e;           
        }finally{
            unset($con);
            return $preparada;
        }
    }
}