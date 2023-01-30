<?php
class Ventas{
    private $id_ventas;
    private $usuario_ventas;
    private $fecha_compra;
    private $cod_producto;
    private $cantidad;
    private $precio_total;

    public function __construct($id_ventas,$usuario_ventas, $fecha_compra, $cod_producto,$cantidad,$precio_total){
        $this->id_ventas = $id_ventas;
        $this->usuario_ventas = $usuario_ventas;
        $this->fecha_compra = $fecha_compra;
        $this->cod_producto = $cod_producto;
        $this->cantidad = $cantidad;
        $this->precio_total = $precio_total;
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
?>