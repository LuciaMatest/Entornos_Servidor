<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 1</title>
</head>
<body>
    <?php
        echo '<link rel="stylesheet" href="../../../style.css">';
    ?>
    <header>
        <h1>PR05</h1>
    </header>
    <main>
    <ul class="menú">
      <li><a href="#">Ordenar</a>
        <div class="normal">
        <?php 
          $datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);
          sort($datos);

          echo "<h3>Array ordenada</h3>";
          echo "<pre>";
          echo var_dump($datos);
          echo "</pre>";

          $aux=0;
          $final=array();

          foreach ($datos as $key => $value) {
            if($aux!=$value){
              $aux=$value;
              $final[$key]=$value;
            }
          }

          echo "<h3>Array sin elementos repetidos</h3>";
          // $final = array_unique($datos);
          echo "<pre>";
          echo var_dump($final);
          echo "</pre>";
        ?>
        </div>
      </li>
      <li><a href="../index.html">Volver</a></li>
    </ul>
  </main>
  <footer>
    <p>2ºDAW - Lucia Mateos Esteban</p>
  </footer>
</body>
</html>