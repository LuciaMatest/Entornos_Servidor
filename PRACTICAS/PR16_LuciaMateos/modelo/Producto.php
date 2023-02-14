<?php
class Producto{
    private $cod_producto;
    private $imagen_alta;
    private $imagen_baja;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;

    public function __construct($cod_producto,$imagen_alta, $imagen_baja, $nombre,$descripcion,$precio,$stock){
        $this->cod_producto = $cod_producto;
        $this->imagen_alta = $imagen_alta;
        $this->imagen_baja = $imagen_baja;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->stock = $stock;
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