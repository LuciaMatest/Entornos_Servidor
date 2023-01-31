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
            } else {
                if ((isset($_GET['fecha'])) && (isset($_GET['ordenFecha'])) ) {
                    $concierto = ConciertoDAO::findByFechaOrden($_GET['fecha'],$_GET['ordenFecha']);
                    $data = json_encode($concierto);
                    self::respuesta(
                        $data,
                        array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                    );
                } elseif (isset($_GET['fecha'])) {
                    $concierto = ConciertoDAO::findByFecha($_GET['fecha']);
                    $data = json_encode($concierto);
                    self::respuesta(
                        $data,
                        array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                    );
                } elseif (isset($_GET['ordenFecha'])) {
                    if (($_GET['ordenFecha'] != 'ASC') && ($_GET['ordenFecha'] != 'DESC')) {
                        self::respuesta(
                            '',
                            array('HTTP/1.1 400 El filtro de fecha debe ser ASC o DESC')
                        );
                    } else {
                        $concierto = ConciertoDAO::findOrderByFecha($_GET['ordenFecha']);
                        $data = json_encode($concierto);
                        self::respuesta(
                            $data,
                            array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                        );
                    }
                } else {
                    self::respuesta('', array('HTTP/1.1 400 No se ha utilizado un filtro correcto'));
                }
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
       $body = file_get_contents('php://input');
       $dato = json_decode($body);
       ConciertoDAO::insert($dato);
       print_r($dato);
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
