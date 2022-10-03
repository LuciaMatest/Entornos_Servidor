<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
</head>
<body>
    <?php
        $es="Hola Mundo";
        $en="Hello worlds";
        $nr="Hei Verden";
        $it="Ciao mondo";
        $de="Hallo welt";
        $idioma=$_GET['pais'];
        echo "${idioma}";
    ?>
</body>
</html>