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
        <h1>PR03</h1>
    </header>
    <main>
    <ul class="menú">
      <li><a href="#">Mostrar valor y tipo de una variable (si es numérico o no y si lo es, si es entero o float)</a>
        <?php
            $variable = implode($_GET);
            echo "La variables es " . $variable;
            echo "<br>";
            foreach ($_GET as $value) {
                if (is_numeric($value)) {
                  echo "Es numerica ";
                  if (strpos($value, '.') != false) {
                    echo "y es de tipo FLOAT";
                  } else {
                    echo "y es de tipo ENTERO";
                  }
                } else {
                  echo gettype($value);
                }
                
            }
        ?>
      </li>
      <li><a href="#">Código</a>
        <ul class="scroll">
          <li><?php
          highlight_file("pagina2.php");
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

