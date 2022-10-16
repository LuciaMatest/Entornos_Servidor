<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 3</title>
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
      <li><a href="#">Matriz</a>
        <?php 
          $x = 4;
          $y = 4;
          $matriz = array();
          for($i=0; $i<$x; $i++) {
            for($j=0; $j<$y; $j++) {
                echo $i.'-'.$j;
            }
          }
        ?>
      </li>
      <li><a href="../index.html">Volver</a></li>
    </ul>
  </main>
  <footer>
    <p>2ºDAW - Lucia Mateos Esteban</p>
  </footer>
</body>
</html>