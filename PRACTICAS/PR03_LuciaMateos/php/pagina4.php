<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 4</title>
</head>
<body>
    <?php
        echo '<link rel="stylesheet" href="../../../style.css">';
    ?>
    <header>
        <h1>PR03</h1>
    </header>
    <main>
    <ul class="menú">
      <li><a href="#">Pasa como parámetros (ano, mes y día) de dos personas, muestre las fechas de nacimiento y la diferencia de edad en años.</a>
            <?php 
              $d1 = $_GET["dia1"];
              $m1 = $_GET["mes1"];
              $a1 = $_GET["anio1"];
              $d2 = $_GET["dia2"];
              $m2 = $_GET["mes2"];
              $a2 = $_GET["anio2"];
              $f1 = $d1 . "/" . $m1 . "/" . $a1;
              $f2 = $d2 . "/" . $m2 . "/" . $a2;
              echo "Juan nacio en: " .$f1;
              echo "<br>";
              echo "Sofia nacio en: " .$f2;
            ?>
      </li>
      <li><a href="#">Código</a>
        <ul class="scroll">
          <li><?php
          highlight_file("pagina4.php");
          ?></li>
        </ul>
      </li>
      <li><a href="../index.html">Volver</a></li>
    </ul>
  </main>
  <footer>
    <p>2ºDAW - Lucia Mateos Esteban</p>
  </footer>
</body>
</html>