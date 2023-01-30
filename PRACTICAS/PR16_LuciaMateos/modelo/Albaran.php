<?php
class Albaran{
    private $id_albaran;
    private $fecha_albaran;
    private $cod_producto;
    private $cantidad;
    private $usuario_albaran;

    public function __construct($id_albaran,$fecha_albaran, $cod_producto, $cantidad,$usuario_albaran){
        $this->id_albaran = $id_albaran;
        $this->fecha_albaran = $fecha_albaran;
        $this->cod_producto = $cod_producto;
        $this->cantidad = $cantidad;
        $this->usuario_albaran = $usuario_albaran;
    }

    public function __get($get){
        //Si la propiedad no existiera retornaría null
        if (property_exists(__CLASS__,$get)) {
            return $this->$get;
        }
        return null;
    }

    public function __set($clave,$valor){
        if (property_exists(__CLASS__,$clave)) {
            return $this->$clave=$valor;
        }
    }
}
