<?
//BBDD
require_once('./config/conexion.php');

//DAO
require_once('./dao/FactoryBD.php');
require_once('./dao/DAO.php');
require_once('./dao/UsuarioDAO.php');
require_once('./dao/ApuestaDAO.php');
require_once('./dao/SorteoDAO.php');

//MODELO
require_once('./modelo/Usuario.php');
require_once('./modelo/Apuesta.php');
require_once('./modelo/Sorteo.php');

//CORE
require_once('./core/funciones.php');

//CONTROLADOR
$controladores = array(
    'home' => './controlador/homeController.php',
    'apuesta' => './controlador/apuestaController.php',
    'sorteo' => './controlador/sorteoController.php'
);

//VISTA
$vistas = array(
    'home' => './vista/homeView.php',
    'apuesta' => './vista/apuestaView.php',
    'sorteo' => './vista/sorteoView.php',
);
