<table class="table table-dark table-hover text-aling-center">
    <thead>
        <tr class="aling-text-center">
            <th scope="col">idProducto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Descripción</th>
            <th scope="col">Stock</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <? foreach ($lista as $prod) { ?>
            <tr>
                <th scope='col'><? echo $prod->idProducto ?></th>
                <td><? echo $prod->nombre ?></td>
                <td><? echo $prod->precio ?></td>
                <td><? echo $prod->descripcion ?></td>
                <td><? echo $prod->stock ?></td>
                <td>
                    <? if (esAdmin() || esModerador()) { ?>
                        <form action="./index.php" method="post">
                                <input type="number" name="cantidad" class="form-control" size="3">
                                <input type="hidden" name="producto" value="<? echo $prod->idProducto ?>">
                                <input type="submit" name="aumentar" class="btn btn-outline-danger mb-1 mt-1" value="Añadir">
                        </form>
                        <? }
                    if (esAdmin()) { ?>
                            <input type="submit" name="editar" class="btn btn-outline-danger mb-1 mt-1" value="Editar">
                        <? } ?>
                </td>
            </tr>
        <? } ?>
    </tbody>
</table>

<? if (esAdmin()) { ?>
    <form action="./index.php" method="post">
    <input type="submit" name="nuevo" class="btn btn-outline-danger mb-1 mt-1" value="Añadir nuevo producto">
    </form>
<? } ?>
</form>

<table class="table table-center table-dark table-hover">
    <thead>
        <tr class="aling-text-center">
            <th scope="col">idAlbaran</th>
            <th scope="col">Fecha</th>
            <th scope="col">idProducto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Usuario</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>

        <?foreach ($albaran as $datos) {?>
            <tr>
            <th scope='col'><? echo $datos->idAlbaran ?></th>
            <td><? echo $datos->fechaAlbaran ?></td>
            <td><? echo $datos->idProducto ?></td>
            <td><? echo $datos->cantidad ?></td>
            <td><? echo $datos->usuario ?></td>
            <td>
            <?if (esAdmin()) {?>
                <form action="./index.php" method="post">
                    <input type="hidden" name="idAlbaran" value="<? echo $datos->idAlbaran ?>">
                    <input type="submit" name="modificar" class="btn btn-outline-danger mb-1 mt-1" value="Modificar registro">
                    <input type="submit" name="eliminar" class="btn btn-outline-danger mb-1 mt-1" value="Eliminar">
                </form>
            <?}?>
            </td>
            </tr>
        <?}?>
    </tbody>
</table>