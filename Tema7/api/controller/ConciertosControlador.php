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
        //no acabada la funcion
        $parametros = $this->parametros();
        //recursos conciertos y nada despues
        if (count(self::recurso()) == 2) {
            if (!$parametros) {
                //LISTAR
                $lista = ConciertoDAO::findAll();
                print_r($lista);
                $data = json_encode($lista);
                self::respuesta($data,
                array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
            }
        }
        //conciertos y despues id
    }


}
