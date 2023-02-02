<?
    class Producto{
        private $idProducto;
        private $nombre;
        private $precio;
        private $descripcion;
        private $stock;
        private $url;

        public function __construct($idProducto,$nombre,$precio,$descripcion,$stock,$url){
            $this->idProducto=$idProducto;
            $this->nombre=$nombre;
            $this->precio=$precio;
            $this->descripcion=$descripcion;
            $this->stock=$stock;
            $this->url=$url;
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