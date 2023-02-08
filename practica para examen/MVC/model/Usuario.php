<?
    class Usuario{
        private $usuario;
        private $clave;
        private $nombre;
        private $correo;
        private $fecha;
        private $roles;

        public function __construct($usuario,$clave,$nombre,$correo,$fecha,$roles)
        {
            $this->usuario=$usuario;
            $this->clave=$clave;
            $this->nombre=$nombre;
            $this->correo=$correo;
            $this->fecha=$fecha;
            $this->roles=$roles;
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