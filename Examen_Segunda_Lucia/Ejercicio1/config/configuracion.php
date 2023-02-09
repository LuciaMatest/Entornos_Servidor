<?
    //BBDD
    require_once('./config/conexionBD.php');

    //DAO
    require_once('./dao/FactoryBD.php');
    require_once('./dao/DAO.php');
    require_once('./dao/UsuarioDAO.php');
    require_once('./dao/ApuestaDAO.php');
    require_once('./dao/SorteoDAO.php');

    //Modelo
    require_once('./model/Usuario.php');
    require_once('./model/Apuesta.php');
    require_once('./model/Sorteo.php');

    //Core
    require_once('./core/funciones.php');

    //Controladores 
    $controladores=array(
        'home'=>'./controller/homeController.php',
        'apuesta'=>'/controller/apuestaController.php',
        'sorteo'=>'/controller/sorteoController.php',
    );

    //Vistas
    $vistas=array(
        'home'=>'./view/homeView.php',
        'apuesta'=>'./view/apuestaView.php',
        'sorteo'=>'./view/sorteoView.php',
    );


?>