<?
    require_once('./config/configuracion.php');

    session_start();

    //Si está la pagina 'home'
    if (isset($_REQUEST['home'])){
        $_SESSION['controlador']= $controladores['home'];
        $_SESSION['vista']= $vistas['home'];
        $_SESSION['pagina']= 'home';
        require_once $_SESSION['controlador'];

    //Si quiere desloguearse
    }elseif (isset($_REQUEST['logout'])) {   
        session_destroy();
        $_SESSION['controlador']= $controladores['home'];
        $_SESSION['vista']= $vistas['home'];
        $_SESSION['pagina']= 'home';
        header('Location: index.php');

    //Otras opciones
    }else{
        //Si no tiene página se le asigna la principal
        if (!isset($_SESSION['pagina'])){
            $_SESSION['vista']=$vistas['home'];
            $_SESSION['controlador']= $controladores['home'];
            $_SESSION['pagina']= 'home';
            require_once $_SESSION['controlador'];
        
        //Para ir al login 
        }elseif (isset($_REQUEST['login'])){
            $_SESSION['pagina']='login';
            $_SESSION['controlador']= $controladores['login'];
            $_SESSION['vista']=$vistas['login'];

        //Una vez se tenga ya página 
        }elseif(isset($_SESSION['pagina'])){
            //Aquí van todas las opciones que tenga nuestro <header> para poder navegar Ej.:

            /*if(isset($_REQUEST['tienda'])){
                $_SESSION['controlador']=$controladores['tienda'];
                $_SESSION['pagina']='tienda';
                $_SESSION['vista']=$vistas['tienda'];
                require_once $_SESSION['controlador'];

            }else{
                //Siempre va el controlador como requerido
                require_once $_SESSION['controlador'];

            } */
        }

    }

    //Y por último siempre se precisará de nuestro layout 
    require_once('./view/layout.php');



?>