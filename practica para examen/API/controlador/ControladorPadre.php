<?
class ControladorPadre{
    public static function recurso(){
        if(isset($_SERVER['PATH_INFO'])){
            $uri=$_SERVER['PATH_INFO'];
            $uri=explode('/',$uri);
            return $uri;
        } else{
            ControladorPadre::respuesta('',array('HTTP/1.1 400 No se ha indicado recurso'));
            return null;
        }
    }

    protected function parametros(){
        $uri=$_GET;
        return $uri;
    }

    public static function respuesta($datos,$httpHeaders=array()){
        foreach($httpHeaders as $valor){
            header($valor);
        }
        echo $datos;
        exit;
    }
}
