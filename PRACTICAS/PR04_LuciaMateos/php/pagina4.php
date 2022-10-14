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
         $valor = 6.33;
         $billete = 10;
         $devolver = $billete - $valor;
        
         while ($devolver != 0) {
          
         }
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