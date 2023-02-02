<?
    class Albaran{
        private $idAlbaran;
        private $fechaAlbaran;
        private $idProducto;
        private $cantidad;
        private $usuario;

        public function __construct($idAlbaran,$fechaAlbaran,$idProducto,$cantidad,$usuario)
        {
            $this->idAlbaran=$idAlbaran;
            $this->fechaAlbaran=$fechaAlbaran;
            $this->idProducto=$idProducto;
            $this->cantidad=$cantidad;
            $this->usuario=$usuario;
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