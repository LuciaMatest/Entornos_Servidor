<table class="table table-dark table-hover align-middle">
            <thead>
              <tr class="aling-text-center">
                <th scope="col">idVenta</th>
                <th scope="col">Cliente</th>
                <th scope="col">Fecha de Venta</th>
                <th scope="col">idProducto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">TOTAL</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
    
            <? foreach ($ventas as $valor) {?>
                    <tr>
                        <th scope='col'><? echo $valor->idVenta ?></th>
                        <td><? echo $valor->cliente ?></td>
                        <td><? echo $valor->fechaVent ?></td>
                        <td><? echo $valor->idProducto ?></td>
                        <td><? echo $valor->cantidad ?></td>
                        <td><? echo $valor->precioTotal ?></td>
                        <?if (esAdmin()) {?>
                            <td>
                                <form action="./index.php" method="post">
                                    <input type="hidden" name="idVenta" value="<? echo $valor->idVenta ?>">
                                    <input type="submit" name="eliminar" class="btn btn-outline-danger mb-1 mt-1" value="Eliminar">                        
                                    <input type="submit" name="editar" class="btn btn-outline-danger mb-1 mt-1" value="Editar">                        
                                </form>
                            </td>    
                        <?}?>
                    </tr>
                <?}?>
            </tbody>
        </table>