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
    <input type="submit" value="borrar" name="accion">
</form>