<?
class Equipo
{
    private $idEquipo;
    private $nombreEquipo;
    private $localidadEquipo;

    public function __construct($idEquipo, $nombreEquipo, $localidadEquipo)
    {
        $this->idEquipo = $idEquipo;
        $this->nombreEquipo = $nombreEquipo;
        $this->localidadEquipo = $localidadEquipo;
    }

    public function __get($get)
    {
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
