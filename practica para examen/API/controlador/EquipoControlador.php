<?
class EquipoControlador extends ControladorPadre
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
    }

    public function insertar()
    {
    }

    public function modificar()
    {
    }

    public function borrar()
    {
        $recurso = self::recurso();
        if (count($recurso) == 3) {
            if (EquipoDAO::delete($recurso[2])) {
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
