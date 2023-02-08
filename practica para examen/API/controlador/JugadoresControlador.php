<?
class JugadoresControlador extends ControladorPadre
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
    }
}
