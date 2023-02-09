<?
    //BBDD
    require_once('./config/conexionBD.php');

    //DAO
    require_once('./dao/FactoryBD.php');
    require_once('./dao/DAO.php');
    //...

    //Modelo
    //...

    //Core
    require_once('./core/funciones.php');

    //Controladores 
    $controladores=array(
        'login'=>'./controller/loginController.php',
        
    );

    //Vistas
    $vistas=array(
        'login'=>'./view/loginView.php',
        
    );


?>