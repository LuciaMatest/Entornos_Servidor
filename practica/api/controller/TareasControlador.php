<?
class TareasControlador extends ControladorPadre
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
                $tareasAll = TareaDAO::findAll();
                //print_r($lista);
                $data = json_encode($tareasAll);
                self::respuesta(
                    $data,
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            } else {
                    self::respuesta('', array('HTTP/1.1 400 No se ha utilizado un filtro correcto'));
            }
        } elseif (count($recurso) == 3) {
            $tareasId = TareaDAO::findById($recurso[2]);
            $data = json_encode($tareasId);
            self::respuesta(
                $data,
                array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            );
        }
    }

    public function insertar()
    {
        // Forma de obtener los datos de entrada de una solicitud HTTP en bruto, lo que permite al servidor procesar la solicitud y responder con la información solicitada
        $body = file_get_contents('php://input');
        // Decodificarlos en un array asociativo
        $dato = json_decode($body, true);
        //Propiedades
        if (isset($dato['titulo']) && isset($dato['descripcion']) && isset($dato['fecha_creacion']) && isset($dato['fecha_vencida']) && isset($dato['estado'])) {
            $tarea = new Tarea($dato['titulo'], $dato['descripcion'], $dato['fecha_creacion'], $dato['fecha_vencida'], $dato['estado']);
            if (TareaDAO::insert($tarea)) {
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
            // Forma de obtener los datos de entrada de una solicitud HTTP en bruto, lo que permite al servidor procesar la solicitud y responder con la información solicitada
            $body = file_get_contents('php://input');
            // Decodificarlos en un array asociativo
            $dato = json_decode($body, true);
            //Propiedades
            if (isset($dato['titulo']) && isset($dato['descripcion']) && isset($dato['fecha_creacion']) && isset($dato['fecha_vencida']) && isset($dato['estado'])) {
                $tarea = new Tarea($dato['titulo'], $dato['descripcion'], $dato['fecha_creacion'], $dato['fecha_vencida'], $dato['estado']);
                $tarea->id = $recurso[2];
                if (TareaDAO::update($tarea)) {
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
        // Obtener el objeto o estructura de datos que representa un recurso específico en la API
        $recurso = self::recurso();
        if (count($recurso) == 3) {
            if (TareaDAO::delete($recurso[2])) {
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
