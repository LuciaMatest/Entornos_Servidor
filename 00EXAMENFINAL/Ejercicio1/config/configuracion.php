<?
//BBDD
require_once('./config/conexion.php');

//DAO
require_once('./dao/FactoryBD.php');
require_once('./dao/DAO.php');
require_once('./dao/UsuarioDAO.php');

//MODELO
require_once('./modelo/Usuario.php');
require_once('./modelo/Partido.php');

//CORE
require_once('./core/funciones.php');

//CONTROLADOR
$controladores = array(
    'home' => './controlador/homeController.php',
    'usuario' => './controlador/userController.php',
    'admin' => './controlador/adminController.php'
);

//VISTA
$vistas = array(
    'home' => './vista/homeView.php',
    'usuario' => './vista/userView.php',
    'admin' => './vista/adminView.php',
    'insertar' => './vista/insertarView.php',
    'modificar' => './vista/modificarView.php'
);
