<?
    require_once '../funciones/funciones.php';
?>
<form action="../controlador/conciertosControlador.php" method="post">
    <select name="id">
        <option value=0>Seleccione un grupo</option>
        <?
            cargarConciertos();
        ?>
    </select>
    <br>
    <label for="grupo">Grupo
        <input type="text" name="grupo" id="grupo">
    </label>
    <br>
    <label for="fecha">Fecha
        <input type="text" name="fecha" id="fecha">
    </label>
    <br>
    <label for="precio">Precio
        <input type="number" name="precio" id="precio">
    </label>
    <br>
    <label for="lugar">Lugar
        <input type="text" name="lugar" id="lugar">
    </label>
    <br>
    <input type="submit" value="modificar" name="accion">
</form>