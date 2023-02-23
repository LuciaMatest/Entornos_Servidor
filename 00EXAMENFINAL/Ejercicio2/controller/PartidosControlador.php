<?
class PartidosControlador extends ControladorPadre
{
    //Para manejar todas las acciones que podemos realizar con los partidos creamos la funcion controlar
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

    //Una funcion por cada una de las acciones que podemos realizar
    //Buscar todos los partidos/ por id de partido/ por jugador
    public function buscar()
    {
        $parametros = $this->parametros();
        $recurso = self::recurso();
        //recurso partidos
        if (count($recurso) == 2) {
            if (!$parametros) {
                //Listar partidos
                $lista = PartidoDAO::findAll();
                $data = json_encode($lista);
                self::respuesta(
                    $data,
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            } else {
                //Listar partidos por jugadores
                if (isset($_GET['jugador'])) {
                    $partido = PartidoDAO::findByIdUser($_GET['jugador']);
                    $data = json_encode($partido);
                    self::respuesta(
                        $data,
                        array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                    );
                } else {
                    self::respuesta('', array('HTTP/1.1 400 No se ha utilizado un filtro correcto'));
                }
            }
        } elseif (count($recurso) == 3) {
            $partido = PartidoDAO::findById($recurso[2]);
            $data = json_encode($partido);
            self::respuesta(
                $data,
                array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            );
        }
    }
    //Añadir nuevo partido
    public function insertar()
    {
        $body = file_get_contents('php://input');
        $dato = json_decode($body, true);
        //propiedades
        if (isset($dato['jug1']) && isset($dato['jug2']) && isset($dato['fecha']) && isset($dato['resultado'])) {
            $partido = new Partido($dato['jug1'], $dato['jug2'], $dato['fecha'], $dato['resultado']);
            if (PartidoDAO::insert($partido)) {
                self::respuesta(
                    '',
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            };
        } else {
            self::respuesta('', array('HTTP/1.1 400 No se ha insertado correctamente'));
        }
    }
    //Modificar partido ya existente
    public function modificar()
    {
        $recurso = self::recurso();
        if (count($recurso) == 3) {
            $body = file_get_contents('php://input');
            $dato = json_decode($body, true);
            if (isset($dato['jug1']) && isset($dato['jug2']) && isset($dato['fecha']) && isset($dato['resultado'])) {
                $partido = new Partido($dato['jug1'], $dato['jug2'], $dato['fecha'], $dato['resultado']);
                $partido->id = $recurso[2];
                if (PartidoDAO::update($partido)) {
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
    //Borrar partido
    public function borrar()
    {
        $recurso = self::recurso();
        if (count($recurso) == 3) {
            if (PartidoDAO::delete($recurso[2])) {
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
