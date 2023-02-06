<?

class Concierto {
    private $id;
    private $grupo;
    private $fecha;
    private $precio;
    private $lugar;

    public function __construct($grupo,$fecha,$precio,$lugar)
    {
        $this->grupo = $grupo;
        $this->fecha = $fecha;
        $this->precio = $precio;
        $this->lugar = $lugar;
    }

    public function __get($get){
        if(property_exists(__CLASS__,$get))
            return $this->$get;
        return null;
    }

    public function __set($clave,$valor){
        if(property_exists(__CLASS__,$clave))
            $this->$clave=$valor;
        
    }

    
}