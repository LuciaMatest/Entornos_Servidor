<?
class Tarea
{
    private $titulo;
    private $descripcion;
    private $fecha_creacion;
    private $fecha_vencida;
    private $estado;

    public function __construct($titulo, $descripcion, $fecha_creacion, $fecha_vencida, $estado)
    {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->fecha_creacion = $fecha_creacion;
        $this->fecha_vencida = $fecha_vencida;
        $this->estado = $estado;
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
