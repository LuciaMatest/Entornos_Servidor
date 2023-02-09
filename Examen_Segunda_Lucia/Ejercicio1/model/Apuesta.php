<?
    class Apuesta{
        private $id;
        private $fecha;
        private $iduser;
        private $n1;
        private $n2;
        private $n3;
        private $n4;
        private $n5;

        public function __construct($id,$fecha,$iduser,$n1,$n2,$n3,$n4,$n5)
        {
            $this->id=$id;
            $this->fecha=$fecha;
            $this->iduser=$iduser;
            $this->n1=$n1;
            $this->n2=$n2;
            $this->n3=$n3;
            $this->n4=$n4;
            $this->n5=$n5;
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