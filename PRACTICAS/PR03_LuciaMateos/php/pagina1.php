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
        <h1>Pagina 1</h1>
    </header>
    <main>
    <ul class="menú">
      <li><a href="#">Muestra el nombre del fichero que se está ejecutando</a>
        <ul>
          <li><?php echo (__FILE__); ?></li>
        </ul>
      </li>
      <li><a href="#">Muestra la dirección IP del equipo desde el que estás accediendo</a>
        <ul>
          <li><?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        </ul>
      </li>
      <li><a href="#">Muestra el path donde se encuentra el fichero que se está ejecutando</a>
        <ul>
          <li><?php echo $_SERVER['SCRIPT_NAME']; ?></li>
        </ul>
      </li>
      <li><a href="#">Muestra la fecha y hora actual formateada en 2022-09-4 19:17:18</a>
        <ul>
          <li>
            <?php
                date_default_timezone_set('Europe/Madrid');
                echo date("d/m/Y - h:i:s", strtotime("now")); 
            ?>
          </li>
        </ul>
      </li>
      <li><a href="#">Muestra la fecha y hora actual en Oporto formateada en (día de la semana, día de mes de año, hh:mm:ss , Zona horaria)</a>
        <ul>
          <li>
            <?php
                $f1 = strtotime("1994/10/11");
                echo "Timestamp:".$f1;
                echo "<br/>";
                $f2 = date("11/10/1994");
                echo "Fecha:".$f2;
            ?>
          </li>
        </ul>
      </li>
      <li><a href="#">Inicializa y muestra una variable en timestamp y en fecha con formato dd/mm/yyyy de tu cumpleaños</a>
        <ul>
          <li><?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        </ul>
      </li>
      <li><a href="#">Calcular la fecha y el día de la semana de dentro de 60 días</a>
        <ul>
          <li>
            <?php
                $ahora = date("d/m/Y");
                echo date("d/m/Y", strtotime("+ 60 days"));
            ?>
          </li>
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