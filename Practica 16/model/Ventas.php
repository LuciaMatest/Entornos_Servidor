<?
    class Ventas{
        private $idVenta;
        private $cliente;
        private $fechaVent;
        private $idProducto;
        private $cantidad;
        private $precioTotal;

        public function __construct($idVenta,$cliente,$fechaVent,$idProducto,$cantidad,$precioTotal)
        {
            $this->idVenta=$idVenta;
            $this->cliente=$cliente;
            $this->fechaVent=$fechaVent;
            $this->idProducto=$idProducto;
            $this->cantidad=$cantidad;
            $this->precioTotal=$precioTotal;
        }

        public function __get($get)
        {
            //Si la propiedad no existiera retornaría null
            if (property_exists(__CLASS__,$get)) {
                return $this->$get;
            }
            return null;
        }

        public function __set($clave, $valor)
        {
            if (property_exists(__CLASS__,$clave)) {
                return $this->$clave=$valor;
            }
        } 
    }

?>