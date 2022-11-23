<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 5</title>
</head>
<body>
    <?php
        echo '<link rel="stylesheet" href="../../../style.css">';
    ?>
    <header>
        <h1>PR04</h1>
    </header>
    <main>
    <ul class="menú">
      <li><a href="#">Bisiesto</a>
        <?php 
          $a = $_GET["año"];
          if ($a % 4 == 0 && $a % 100 != 0 || $a % 400 == 0) {
            echo($a . ' es bisiesto');
          } else {
            echo($a . ' no es bisiesto');
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

<!-- Escribe un programa que pida un año y que escriba si es bisiesto o no. 
Los años bisiestos son multiplos de 4 pero los multiplos de 100 no lo son , 
aunque los multiplos de 400 si -->
