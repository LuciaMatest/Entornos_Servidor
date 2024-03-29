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
                if ((isset($_GET['fecha'])) && (isset($_GET['ordenFecha']))) {
                    $concierto = ConciertoDAO::findByFechaOrden($_GET['fecha'], $_GET['ordenFecha']);
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
        $dato = json_decode($body, true);
        //propiedades
        if (isset($dato['grupo']) && isset($dato['fecha']) && isset($dato['precio']) && isset($dato['lugar'])) {
            $concierto = new Concierto($dato['grupo'], $dato['fecha'], $dato['precio'], $dato['lugar']);
            if (ConciertoDAO::insert($concierto)) {
                self::respuesta(
                    '',
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            };
        } else {
            self::respuesta('', array('HTTP/1.1 400 No se ha insertado correctamente'));
        }
    }
    public function modificar()
    {
        $recurso = self::recurso();
        if (count($recurso) == 3) {
            $body = file_get_contents('php://input');
            $dato = json_decode($body, true);
            if (isset($dato['grupo']) && isset($dato['fecha']) && isset($dato['precio']) && isset($dato['lugar'])) {
                $concierto = new Concierto($dato['grupo'], $dato['fecha'], $dato['precio'], $dato['lugar']);
                $concierto->id = $recurso[2];
                if (ConciertoDAO::update($concierto)) {
                    self::respuesta(
                        '',
                        array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                    );
                } else {
                    self::respuesta(
                        '',
                        array('Content-Type: application/json', 'HTTP/1.1 200 Ya no existe, no se ha modificado')
                    );
                }
            }
        } else {
            self::respuesta('', array('HTTP/1.1 400 El recurso esta mal formado /conciertos/{id}'));
        }
    }
    public function borrar()
    {
        $recurso = self::recurso();
        if (count($recurso) == 3) {
            if (ConciertoDAO::delete($recurso[2])) {
                self::respuesta(
                    '',
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            } else {
                self::respuesta(
                    '',
                    array('Content-Type: application/json', 'HTTP/1.1 200 Ya no existe, no se ha borrado')
                );
            }
        } else {
            self::respuesta('', array('HTTP/1.1 400 No se ha podido eliminar correctamente'));
        }
    }
}
