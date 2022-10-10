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
      <li><a href="#">Crea una página a la que se le pase por url una variable con el nombre que quieras y muestre el valor de la variable, el tipo, 
      si es numérico o no y si lo es, si es entero o float.</a>
        <ul>
          <li><?php
            $v= $_GET["var"];
        
            echo "El valor es: ";
            var_dump($v);
            echo "Es de tipo: " . gettype($v);

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