<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        unset($_SESSION['error']);
    ?>
    <form action="./funciones/valida.php" method="post">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user"><br><br>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass"><br><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>