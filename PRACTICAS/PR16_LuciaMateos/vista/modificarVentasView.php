<div class="pt-5">
    <div class="container mod_ventas">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5 col-md-9 col-sm-10">
                <div class="card" style="background-color: #d4d4d4;border-style: none;">
                    <div class="card-title text-center">
                        <h2 class="px-3 pt-4 fw-bold" style="color: #555;">Modificar</h2>
                    </div>
                    <div class="card-body pt-0">
                        <!-- Formulario -->
                        <form action="./index.php" method="post">
                            <!-- ID -->
                            <? if ($_SESSION['accion'] == 'editar') { ?>
                                <div class="mb-4 px-2">
                                    <label for="idVentas" class="form-label">ID</label>
                                    <input type="text" class="form-control" name="id_ventas" id="idVentas" readonly value="<? echo $ventas->id_ventas ?>">
                                </div>
                            <? } ?>
                            <!-- Usuario -->
                            <div class="mb-4 px-2">
                                <label for="idUsuario" class="form-label">Usuario</label>
                                <input type="number" class="form-control" name="usuario_ventas" id="idUsuario" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo $ventas->usuario_ventas;
                                } ?>">
                            </div>
                            <!-- Fecha -->
                            <div class="mb-4 px-2">
                                <label for="idFechaVentas" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="fecha_compra" id="idFechaVentas" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo $ventas->fecha_compra;
                                } ?>">
                            </div>
                            <!-- Codigo -->
                            <div class="mb-4 px-2">
                                    <label for="cod_producto" class="form-label">Código</label>
                                    <input type="text" class="form-control" name="cod_producto" id="cod_producto" readonly value="<? echo $ventas->cod_producto ?>">
                            </div>
                            <!-- Cantidad -->
                            <div class="mb-4 px-2">
                                <label for="idCantidad" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" name="cantidad" id="idCantidad" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo $ventas->cantidad;
                                } ?>">
                            </div>
                            <!-- Precio -->
                            <div class="mb-4 px-2">
                                <label for="idPrecio" class="form-label">Precio</label>
                                <input type="number" class="form-control" name="precio_total" id="idPrecio" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo $ventas->precio_total;
                                } ?>">
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Modificar" name="modificar" class="botonG">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>