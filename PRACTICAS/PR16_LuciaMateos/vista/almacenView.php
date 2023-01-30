<div class="p-2 p-sm-3 p-md-3 p-lg-3">
    <h1 class="text-center text-sm-center text-md-start text-lg-start">Ventas</h1>
    <table class="table text-center">
        <thead class="text-white" style="background-color: #be901b;">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <?
                if (esAdmin()) {
                    echo '<th scope="col">Modificar</th>';
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
                    <td><? echo $valor->stock ?></td>
                    <td>
                        <? if (esAdmin() || esModerador()) { ?>
                            <form action="./index.php" method="post">
                                <input type="number" name="cantidad" size="2" value="1">
                                <input type="submit" name="añadir" class="botonG" value="Añadir">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg>
                                </input>
                                <input type="hidden" name="cod_producto" value="<? echo $valor->cod_producto ?>">
                            <? } ?>
                            <? if (esAdmin()) { ?>
                                <input type="submit" name="editar" class="botonG" value="Editar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg>
                                </input>

                            <? } ?>
                    </td>
                </tr>
            <? } ?>
        </tbody>
    </table>
    <? if (esAdmin()) { ?>
        <input type="submit" name="nuevo" class="botonG" value="Añadir producto">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg>
        </input>
    <? } ?>
    </form>
</div>