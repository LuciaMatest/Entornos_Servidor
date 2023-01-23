<br>
<?
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<form action="./index.php" method="post">
    <label for="user">Usuario</label>
    <input type="text" name="user" id="user" >
    <br><label for="user">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="pass">Contraseña</label>
    <input type="password" name="pass" id="pass">
    <label for="pass"> Repite Contraseña</label>
    <input type="password" name="pass1" id="pass1">
    <br><label for="pass">Email</label>
    <input type="text" name="email" id="email" >
    <input type="submit" value="Guardar" name="guardar">
    </form>