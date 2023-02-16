<?
//BBDD
require_once('./config/conexion.php');

//DAO
require_once('./dao/ApuestaDAO.php');
require_once('./dao/DAO.php');
require_once('./dao/FactoryDAO.php');
require_once('./dao/SorteoDAO.php');
require_once('./dao/UsuarioDAO.php');

//MODELO
require_once('./modelo/Apuesta.php');
require_once('./modelo/Sorteo.php');
require_once('./modelo/Usuario.php');

//CORE
require_once('./core/funciones.php');

//VISTA
$vistas = array(
    'apuesta' => './vista/apuestaView.php',
    'home' => './vista/homeView.php',
    'sorteo' => './vista/sorteoView.php'
);

//CONTROLADOR
$controladores = array(
    'apuesta' => './controlador/apuestaController.php',
    'home' => './controlador/homeController.php',
    'sorteo' => './controlador/sorteoController.php'
);
