<?php
class Producto{
    private $cod_producto;
    private $img_alta;
    private $img_baja;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;

    public function __construct($cod_producto,$img_alta, $img_baja, $nombre,$descripcion,$precio,$stock){
        $this->cod_producto = $cod_producto;
        $this->img_alta = $img_alta;
        $this->img_baja = $img_baja;
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