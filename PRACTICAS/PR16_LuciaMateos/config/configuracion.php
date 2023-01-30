<?php
    //BBDD
    require_once('./config/conexionBD.php');
    
    //CONTROLADOR
    $controladores = array(
        'albaran'=>'./controlador/AlbaranController.php',
        'almacen'=>'./controlador/AlmacenController.php',
        // 'home'=>'./controlador/HomeController.php',
        'login'=>'./controlador/LoginController.php',
        'modificarAlbaran'=>'./controlador/ModificarAlbaranController.php',
        'modificarProducto'=>'./controlador/ModificarProductoController.php',
        'modificarVentas'=>'./controlador/ModificarVentasController.php',
        'perfil'=>'./controlador/PerfilController.php',
        'producto'=>'./controlador/ProductoController.php',
        'registro'=>'./controlador/RegistroController.php',
        'tienda'=>'./controlador/TiendaController.php',
        'ventas'=>'./controlador/VentasController.php'
    );

    //CORE
    require_once('./core/funciones.php');
    // require_once('./core/validaciones.php');

    //DAO
    require_once('./dao/DAO.php');
    require_once('./dao/FactoryBD.php');
    require_once('./dao/UsuarioDAO.php');
    require_once('./dao/ProductoDAO.php');
    require_once('./dao/AlbaranDAO.php');
    require_once('./dao/UsuarioDAO.php');

    //MODELO
    require_once('./modelo/Usuario.php');
    require_once('./modelo/Producto.php');
    require_once('./modelo/Albaran.php');
    require_once('./modelo/Ventas.php');

    //VISTA
    $vistas = array(
        'albaran'=>'./vista/AlbaranView.php',
        'almacen'=>'./vista/AlmacenView.php',
        'home'=>'./vista/homeView.php',
        'login'=>'./vista/loginView.php',
        'modificarAlbaran'=>'./vista/modificarAlbaranView.php',
        'modificarProducto'=>'./vista/modificarProductoView.php',
        'modificarVentas'=>'./vista/modificarVentasView.php',
        'perfil'=>'./vista/perfilView.php',
        'verProducto'=>'./vista/productoView.php',
        'registro'=>'./vista/registroView.php',
        'tienda'=>'./vista/tiendaView.php',
        'ventas'=>'./vista/ventasView.php'
    );
?>
