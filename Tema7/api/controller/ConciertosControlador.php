<?
class ConciertosControlador extends ControladorPadre
{
    public function controlar()
    {
        $metodo = $_SERVER['REQUEST_METHOD'];
        switch ($metodo) {
            case 'GET':
                $this->buscar();
                break;
            case 'POST':
                $this->insertar();
                break;

            case 'PUT':
                $this->modificar();
                break;

            case 'DELETE':
                $this->borrar();
                break;

            default:
                ControladorPadre::respuesta('', array('HTTP/1.1 400 No se ha iniciado recurso'));
                return null;
        }
    }

    public function buscar()
    {
        $parametros = $this->parametros();
        $recurso = self::recurso();
        //recurso conciertos y nada despues 
        if (count($recurso) == 2) {
            if (!$parametros) {
                //Listar 
                $lista = ConciertoDAO::findAll();
                //print_r($lista);
                $data = json_encode($lista);
                self::respuesta(
                    $data,
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            }
        } elseif (count($recurso) == 3) {
            $concierto = ConciertoDAO::findById($recurso[2]);
            $data = json_encode($concierto);
                self::respuesta(
                    $data,
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
        }
    }
    public function insertar()
    {
        $parametros = $this->parametros();
    }
    public function modificar()
    {
        $parametros = $this->parametros();
    }
    public function borrar()
    {
        $parametros = $this->parametros();
    }
}