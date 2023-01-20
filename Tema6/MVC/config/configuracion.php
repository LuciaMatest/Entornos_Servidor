<?php
    //BBDD
    require_once('./config/conexionBD.php');
    
    //CONTROLADOR
    $controladores = array(
        'login'=>'./controlador/loginController.php',
        'user'=>'./controlador/UserController.php',
        'registro'=>'./controlador/registroController.php',
        'home'=>'./controlador/homeController.php'
    );

    //CORE
    require_once('./core/funciones.php');
    require_once('./core/validaciones.php');

    //DAO
    require_once('./dao/DAO.php');
    require_once('./dao/FactoryBD.php');
    require_once('./dao/UsuarioDAO.php');
    require_once('./dao/ProductoDAO.php');

    //MODELO
    require_once('./modelo/Usuario.php');
    require_once('./modelo/Producto.php');

    //VISTA
    $vistas = array(
        'home'=>'./vista/homeView.php',
        'login'=>'./vista/loginView.php',
        'user'=>'./vista/UserView.php',
        'registro'=>'./vista/registroView.php'
    );
?>
