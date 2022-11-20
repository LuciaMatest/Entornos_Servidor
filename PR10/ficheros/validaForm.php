<?




    if(isset($_REQUEST['leido'])){
        header('Location: ./leer.php?fichero='.$_REQUEST['fichero']);
        exit();
        
    }
    

    if(isset($_REQUEST['editado'])){
        header('Location: ./editar.php?fichero='.$_REQUEST['fichero']);
        exit();
        
    }
    
   


    if(isset($_REQUEST['modificado'])){

        //coger el request del textarea y sobreescribir en el fichero, despues hacer header Location a leer.php.
        $texto=$_REQUEST['texto'];
        
        if(!$fp = fopen($_REQUEST['fichero'],"w")){
            echo "<br>Ha habido un error al abrir el archivo";
        }else{
            fwrite($fp,$texto);
            header('Location: ./leer.php?fichero='.$_REQUEST['fichero']);
        }
        fclose($fp);
        
        exit();
        // if(file_exists($_REQUEST['fichero'])){

        // }
        // return false;
    }
    // return false;




    // function editado(){
    //     if(isset($_REQUEST['editado'])){
    //         if(file_exists($_REQUEST['fichero'])){
    //             header('Location: ./editar.php?fich='.$_REQUEST['fichero']);   
    //             exit();
    //         }
    //         return true;
    //     }
    //     return false;
    // }


    // function leido(){
    //     if(isset($_REQUEST['leido'])){
    //         if(file_exists($_REQUEST['fichero'])){
    //             header('Location: ./leer.php?fich='.$_REQUEST['fichero']);
    //             exit();
    //         }
    //         return true;
    //     }
    //     return false;
    // }
?>