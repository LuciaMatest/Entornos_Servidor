<?php

    class Persona{
        private $nombre;
        private $edad;
        private $email;
        private $id;

        public function __construct($nombre,$edad,$email){
            $this->id=1;
            $this->edad =$edad;
            $this->nombre =$nombre;
            $this->email =$email;

        }



        public function getNombre(){
            return $this->nombre;
        }

        public function getEdad(){
            return $this->edad;
        }
        
        public function getEmail(){
            return $this->email;
        }



        
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function setEdad($edad){
            $this->edad=$edad;
        }
        
        public function setEmail($email){
            $this->email=$email;
        }

        public function __toString(){
         return "ID:".$this->id."Nombre " . $this->nombre." Edad ".$this->edad."<br>"; 
        }

        public function __clone(){
            $this->id=$this->id+1;
        }
        public function __destruct(){
            // echo "Se Destruye ".$this;
        }
  }

?>