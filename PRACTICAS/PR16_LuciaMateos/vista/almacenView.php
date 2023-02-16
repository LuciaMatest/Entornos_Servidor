<div class="p-2 p-sm-3 p-md-3 p-lg-3">
    <table class="table text-center">
        <thead class="text-white">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <?
                if (esAdmin()) {
                    echo '<th scope="col">Editar</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <? foreach ($almacen as $valor) { ?>
                <tr>
                    <th scope='col'><? echo $valor->cod_producto ?></th>
                    <td><? echo $valor->nombre ?></td>
                    <td><? echo $valor->descripcion ?></td>
                    <td><? echo $valor->precio ?></td>
                    <td><? echo 'Disponible ' . $valor->stock . '<br>' ?>
                        <form action="./index.php" method="post">
                            <? if (esAdmin() || esModerador()) { ?>
                                <input type="number" class="border-0" name="cantidad" value="1" title="Cantidad" size="4" min="1" max="">
                                <input type="submit" name="añadir" class="boton" value="Añadir">
                                <input type="hidden" name="cod_producto" value="<? echo $valor->cod_producto ?>">
                            <? } ?>
                    </td>
                    <? if (esAdmin()) { ?>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                            <input type="submit" name="editar" class="boton" value="Editar">
                        </td>
                        
                    <? } ?>
                    </form>
                </tr>
            <? } ?>
        </tbody>
    </table>
    <form action="./index.php" method="post">
        <? if (esAdmin()) { ?>
            <input type="submit" name="crear" class="botonG" value="Añadir producto">
        <? } ?>
    </form>
</div>