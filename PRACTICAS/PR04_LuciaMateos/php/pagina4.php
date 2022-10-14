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
        <h1>PR04</h1>
    </header>
    <main>
    <ul class="menú">
      <li><a href="#">Monedas</a>
        <?php
         $valor = 6.33*100;
         $billete = 10*100;
         $devolver = $billete - $valor;
         $moneda1 = 200;
         $moneda2 = 100;
         $moneda3 = 50;
         $moneda4 = 20;
         $moneda5 = 10;
         $moneda6 = 5;
         $moneda7 = 2;
         $moneda8 = 1;

         $numeroMonedas1 = 0;
         while ($devolver > $moneda1) {
          $devolver -= $moneda1;
          $numeroMonedas1++; 
         }
         $numeroMonedas2 = 0;
         while ($devolver > $moneda2) {
          $devolver -= $moneda2;
          $numeroMonedas2++; 
         }
         $numeroMonedas3 = 0;
         while ($devolver > $moneda3) {
          $devolver -= $moneda3;
          $numeroMonedas3++;
         }
         $numeroMonedas4 = 0;
         while ($devolver > $moneda4) {
          $devolver -= $moneda4;
          $numeroMonedas4++;
         }
         $numeroMonedas5 = 0;
         while ($devolver > $moneda5) {
          $devolver -= $moneda5;
          $numeroMonedas5++;
         }
         $numeroMonedas6 = 0;
         while ($devolver > $moneda6) {
          $devolver -= $moneda6;
          $numeroMonedas6++;
         }
         $numeroMonedas7 = 0;
         while ($devolver >= $moneda7) {
          $devolver -= $moneda7;
          $numeroMonedas7++;
         }
         $numeroMonedas8 = 0;
         while ($devolver >= $moneda8) {
          $devolver -= $moneda8;
          $numeroMonedas8++;
         }

         echo "El numero de monedas de 2€ es ". $numeroMonedas1;
         echo "<br>";
         echo "El numero de monedas de 1€ es ". $numeroMonedas2;
         echo "<br>";
         echo "El numero de monedas de 0.50€ es ". $numeroMonedas3;
         echo "<br>";
         echo "El numero de monedas de 0.20€ es ". $numeroMonedas4;
         echo "<br>";
         echo "El numero de monedas de 0.10€ es ". $numeroMonedas5;
         echo "<br>";
         echo "El numero de monedas de 0.05€ es ". $numeroMonedas6;
         echo "<br>";
         echo "El numero de monedas de 0.02€ es ". $numeroMonedas7;
         echo "<br>";
         echo "El numero de monedas de 0.01€ es ". $numeroMonedas8;
         //calcular cual es la devolucion
         // a partir de esta variable restar
         // mirar las monedas de mayor a menos
         //puedo devolver una moneda de 2??
         // si devuelvo se resta de la devolucion
         // puedo devolver otra de 2€ 
         // puedo deolver una de 1€
         // hasta que la devolucion sea 0
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

<!-- Realiza un programa que le introduzca un valor de un producto con 2 decimales
 y posteriormente un valor con el que pagar po encima(valor del producto 6.33€ 
y ha pagado con 10€). Muestra el numero minimo de monedas con las que puedes 
devolver el cambio -->