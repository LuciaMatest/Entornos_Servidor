<?
class Partido
{
    private $id;
    private $jug1;
    private $jug2;
    private $fecha;
    private $resultado;

    public function __construct($jug1, $jug2, $fecha, $resultado)
    {
        $this->jug1 = $jug1;
        $this->jug2 = $jug2;
        $this->fecha = $fecha;
        $this->resultado = $resultado;
    }

    public function __get($get)
    {
        //Si la propiedad no existe retornaría null
        if (property_exists(__CLASS__, $get)) {
            return $this->$get;
        }
        return null;
    }

    public function __set($clave, $valor)
    {
        if (property_exists(__CLASS__, $clave)) {
            return $this->$clave = $valor;
        }
    }
}
