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
                if ((isset($_GET['jug1'])) || (isset($_GET['jug2']))) {
                    $partido = PartidoDAO::findByIdUser($_GET['jug1'], $_GET['jug2']);
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
    public function insertar()
    {
    }
    public function modificar()
    {
    }
    public function borrar()
    {
    }
}
