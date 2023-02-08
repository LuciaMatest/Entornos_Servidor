<?
class Jugadores
{
    private $idJugador;
    private $nombreJugador;
    private $posicionJugador;
    private $sueldoJugador;
    private $equipoJugador;

    public function __construct($idJugador, $nombreJugador, $posicionJugador, $sueldoJugador, $equipoJugador)
    {
        $this->idJugador = $idJugador;
        $this->nombreJugador = $nombreJugador;
        $this->posicionJugador = $posicionJugador;
        $this->sueldoJugador = $sueldoJugador;
        $this->equipoJugador = $equipoJugador;
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
