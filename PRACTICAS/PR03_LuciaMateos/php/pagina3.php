<!DOCTYPE html>
<html lang="en">
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
        <h1>PR03</h1>
    </header>
    <main>
    <ul class="menú">
      <li><a href="#">Pasa como parámetros en la URL (año, mes y día) y muestre el día.(Por defecto, 12/09/2022)</a>
      <?php 
          $d = $_REQUEST["dia"];
          $m = $_REQUEST["mes"];
          $a = $_REQUEST["anio"];
          $fecha = $d . "/" . $m . "/" . $a;
          echo $fecha;
          echo "<br>";
          $f = new dateTime($fecha);
          echo "La fecha coincide con el dia: ";
          echo date_format($f, "l");
      ?>
      </li>
      <li><a href="#">Código</a>
        <ul class="scroll">
          <li><?php
          highlight_file("pagina3.php");
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