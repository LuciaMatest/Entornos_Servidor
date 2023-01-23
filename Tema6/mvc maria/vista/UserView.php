<br>
<?
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<form action="./index.php" method="post">
    <label for="user">Usuario</label>
    <input type="text" name="user" id="user" value=<? echo $usuario->usuario ?>>
    <br><label for="user">Nombre</label>
    <input type="text" name="nombre" id="nombre" value=<? echo $usuario->nombre ?>>
    <?
    if ($_SESSION['accion'] == 'editar') { ?>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass">
        <label for="pass"> Repite Contraseña</label>
        <input type="password" name="pass1" id="pass1">
    <?
    }
    ?>
    <br><label for="pass">Email</label>
    <input type="text" name="email" id="email" value=<? echo $usuario->correo ?>>
    <br><label for="pass">Perfil</label>
    <input type="text" name="perfil" id="perfil" value=<? echo $usuario->perfil ?>>
    <?
    if ($_SESSION['accion'] == 'editar') { ?>
        <input type="submit" value="Guardar" name="guardar">
    <?
    } else {
    ?>
        <input type="submit" value="Editar" name="editar">
    <?
    }
    ?>
</form>