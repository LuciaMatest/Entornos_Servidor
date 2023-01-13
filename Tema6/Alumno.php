<?php
    require_once('./Persona2.php');

    class Alumno extends Persona{
        private $curso;

        public function __construct($nombre,$edad,$email,$curso){
            parent::__construct($nombre,$edad,$email);
            $this->curso = $curso;
        }

        public function __toString(){
            return parent::$id.": Nombre: " . $this->nombre." Edad ".$this->edad." Curso: ".$this->curso."<br>"; 
           }
    }
?>