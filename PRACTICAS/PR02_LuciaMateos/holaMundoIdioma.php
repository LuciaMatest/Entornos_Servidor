<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Idiomas</title>
</head>
<body>
    <header>
        <h1>PR02</h1>
    </header>
    <main>
        <ul class="menú">
            <?php
                $es="Hola Mundo";
                $en="Hello worlds";
                $nr="Hei Verden";
                $it="Ciao mondo";
                $de="Hallo welt";
                $idioma=$_GET['pais'];
                echo "${$idioma}";
            ?>
            <li><a href="eligeidioma.html">Volver</a></li>
        </ul>
    </main>
    <footer>
        <p>2ºDAW - Lucia Mateos Esteban</p>
    </footer>
</body>
</html>