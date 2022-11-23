<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
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
      <li><a href="#">Intercambiar</a>
      <div class="normal">
        <?php 
          echo "<h3>Dado un array devuelve la posición donde haya el valor 3 y cambia el
          valor por el número de la posición</h3>";
          $datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);
          
          foreach ($datos as $key => $value) {
            if ($value==3) {
              $cambio = $key;
              array_splice($datos, $key, 1, $key);
            }
          }
          
          foreach ($datos as $key) {
            echo $key . "&nbsp;&nbsp;";
          }

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