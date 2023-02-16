<?
require_once '../funciones/funciones.php';
?>
<div class="container">
    <form action="../controlador/conciertosControlador.php">
        <select name="id">
            <option value="0">Seleccione un grupo</option>
            <?
            cargarConciertos();
            ?>
        </select>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary" name="accion">Borrar</button>
            </div>
        </div>
    </form>
</div>