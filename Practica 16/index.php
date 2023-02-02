<?
    require_once('./config/configuracion.php');
    session_start();

    if (isset($_REQUEST['home'])){
        $_SESSION['controlador']= $controladores['home'];
        $_SESSION['vista']= $vistas['home'];
        $_SESSION['pagina']= 'home';
        require_once $_SESSION['controlador'];

    }elseif (isset($_REQUEST['logout'])) {
        
        session_destroy();
        $_SESSION['controlador']= $controladores['home'];
        $_SESSION['vista']= $vistas['home'];
        $_SESSION['pagina']= 'home';
        header('Location: index.php');

    }else{

        if (!isset($_SESSION['pagina'])){
            $_SESSION['vista']=$vistas['home'];
            $_SESSION['controlador']= $controladores['home'];
            $_SESSION['pagina']= 'home';
            require_once $_SESSION['controlador'];

        }elseif (isset($_REQUEST['login'])){
            $_SESSION['pagina']='login';
            $_SESSION['controlador']= $controladores['login'];
            $_SESSION['vista']=$vistas['login'];

        }elseif(isset($_SESSION['pagina'])){

            if (isset($_REQUEST['miperfil'])) {
                $_SESSION['accion']='ver';
                $_SESSION['controlador']=$controladores['user'];
                $_SESSION['vista']=$vistas['user'];
                require_once $_SESSION['controlador'];
                
            }elseif(isset($_REQUEST['tienda'])){
                $_SESSION['controlador']=$controladores['tienda'];
                $_SESSION['pagina']='tienda';
                $_SESSION['vista']=$vistas['tienda'];
                require_once $_SESSION['controlador'];

            }elseif(isset($_REQUEST['almacen'])){
                $_SESSION['controlador']=$controladores['producto'];
                $_SESSION['pagina']='Almacen';
                $_SESSION['vista']=$vistas['almacen'];
                require_once $_SESSION['controlador'];

            }elseif(isset($_REQUEST['ventas'])){
                $_SESSION['controlador']=$controladores['ventas'];
                $_SESSION['pagina']='ventas';
                $_SESSION['vista']=$vistas['ventas'];
                require_once $_SESSION['controlador'];

            }elseif(isset($_REQUEST['registro'])){
                $_SESSION['controlador']=$controladores['registro'];
                $_SESSION['pagina']='registrar';
                $_SESSION['vista']=$vistas['registro'];
                require_once $_SESSION['controlador'];

            }else{
                
                // require_once $_SESSION['controlador'];
            }

        }
    }

    require_once('./view/layout.php');

?>