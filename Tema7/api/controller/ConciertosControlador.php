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
                # code...
                break;
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
            }
        }
        //conciertos y despues id
    }


}
