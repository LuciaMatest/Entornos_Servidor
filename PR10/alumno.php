<?php
include('validaciones.php');
?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <title>DWES-Itziar</title>

  </head>

  <body>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background-color: bisque;">
      <div class="container">
        <h1><a href="../../../../index.html">Desarrollo Web en Entorno Servidor</a></h1>
        <h2><center>Fichero csv</center></h2>
      </div>
    </div>

    <div class="container">
        <div class="row">
                <h4><a href="../../../">Tema 3</a><a href="../../">/Prácticas</a><a href="../">/PR010/</a>Ejercicio 2</h4>
        </div>
        <div class="row">            
        <?php
        
        if(enviado() && validado()){
          
          $arrayNotas=array();
          $nombreAlumno = $_REQUEST['nombreAlumno'];
          if (!file_exists('notas.csv')) {
            echo "<span>El fichero no existe</span>";
          } else {
            
            if (!$fp = fopen('notas.csv', 'r')) {
              
              echo "<span>No se puede abrir el fichero</span>";
            } else {
              
              while ($notas = fgetcsv($fp, 0, ";")) {
                array_push($arrayNotas,$notas);
              } 
              fclose($fp);
              if (!$fp = fopen('notas.csv', 'w')) {
                echo "<span>No se puede abrir el fichero</span>";
              }else {
                
                foreach ($arrayNotas as $key => $value) { 
                if ($value[0] == $nombreAlumno) {
                  
                  $value[1] = $_REQUEST['nota1'];
                  $value[2] = $_REQUEST['nota2'];
                  $value[3] = $_REQUEST['nota3'];
                  fputcsv($fp, $value,';');
                } else {
                  
                  fputcsv($fp, $value,';');
                }
              }
              fclose($fp);
             }
             
                header('Location: ./LeerNotas.php');
                exit();
            }
          }
        }else{

            if(isset($_REQUEST['alumno'])){

              $nombreAlumno=$_REQUEST['alumno'];
            }else{
              $nombreAlumno=$_REQUEST['nombreAlumno'];

            }

            $cadenaMostrar;
            if(!$fp=fopen('notas.csv','r')){
              echo "<h3>No se puede abrir el fichero</h3>";
            }else{
              while($notas=fgetcsv($fp,0,";")){
                foreach ($notas as $element) {
                    if($notas[0]==$nombreAlumno){
                      $cadenaMostrar=$notas;
                    }
                  }
                }
                fclose($fp);
              }
            }
            $patron='/^[0-9]{1,2}$/';
            $errores=array();
            ?><form action='alumno.php' method='post'>
                <label>Alumno</label>
                <input type="text" readonly name="nombreAlumno" value="<?php 
                if(isset($_REQUEST['guardar'])){
                  echo $_REQUEST['nombreAlumno'];
                } else {
                  echo $cadenaMostrar[0];
                }?>"><br>
                <label>Notas</label>
                <input type="text" name="nota1" value="<?php
                  if(!isset($_REQUEST['nota1'])){
                    echo $cadenaMostrar[1];
                  }else{
                    echo $_REQUEST['nota1'];
                  }
                    ?>"><?
                  if(enviado() && ($_REQUEST['nota1']<0 || $_REQUEST['nota1']>10) && !preg_match($patron,$_REQUEST['nota1'])){
                    array_push($errores,'Nota uno no válida <br>');
                  }
                ?>
                <input type="text" name="nota2" value="<?php
                if(!isset($_REQUEST['nota2'])){
                  echo $cadenaMostrar[2];
                }else{
                  echo $_REQUEST['nota2'];
                }?>"><?php
                  if(enviado() && ($_REQUEST['nota2']<0 || $_REQUEST['nota2']>10) && !preg_match($patron,$_REQUEST['nota2'])){
                    array_push($errores,'Nota dos no válida <br>');
                  } 
                ?>
                <input type="text" name="nota3" value="<?php
                if(!isset($_REQUEST['nota3'])){
                  echo $cadenaMostrar[3];
                }else{
                  echo $_REQUEST['nota3'];
                }?>"><?php
                  if(enviado() && ($_REQUEST['nota3']<0 || $_REQUEST['nota3']>10) && !preg_match($patron,$_REQUEST['nota3'])){
                    array_push($errores,'Nota tres no válida <br>');
                  } 
                ?>
                <input type="submit" value="guardar" name='guardar'>
            </form><?
            if(count($errores)!=0){
              foreach ($errores as $key => $value) {
                echo '<span>'.$value.'</span>';
              }
            }
            ?>
           
        </div>    
    </div> <!-- /container -->
    <footer class="container" style="background-color: bisque;">
    <p><center>Página de Itziar</center></p>
    </footer>
</body>
</html>