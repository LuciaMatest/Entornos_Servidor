<?php

    class Persona{
        private $nombre;
        private $edad;
        private $email;
        public  static $id=0;

        public function __construct($nombre,$edad,$email){
            self::$id = self::$id+1;
            $this->edad =$edad;
            $this->nombre =$nombre;
            $this->email =$email;

        }
        
        public function __get($get){
            return $this->$get;
        }

        public function __set($clave,$valor){
            $this->$clave=$valor;
        }
        
        public function __toString(){
         return "ID:".$this->id."Nombre " . $this->nombre." Edad ".$this->edad."<br>"; 
        }
        
        public function __clone(){
            // $this->id=$this->id+1;
        }

        public function __destruct(){
            self::$id = self::$id - 1;
        }

        public static function elProximoId(){
            return self::$id + 1;
        }

        public function verVariables(){
            return get_object_vars($this);
        }
  }

?>